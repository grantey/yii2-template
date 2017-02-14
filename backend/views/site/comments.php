<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\bootstrap\Modal;
//use kartik\datetime\DateTimePicker;
$this->title = 'Управление отзывами';
?>
<div class="site-index">

    <h1>Управление отзывами</h1>
    
    <?php yii\widgets\Pjax::begin(['id' => 'comment-list']); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'rowOptions' => function ($model, $key, $index, $grid)
        {
            if($model->active === 0) {
                return ['style' => 'background-color:#dff0d8;'];
            }
        },
        'columns' => [
            [
                'attribute' => 'name',
                'label' => 'Имя',
                'value' => 'name',
                'contentOptions' => ['style' => 'width: 200px;']
            ],
            [
                'attribute' => 'date',
                'label' => 'Дата',
                'value' => function ($model, $key, $index, $column) {
                    $date = new DateTime($model->date);
                    return $date->format('Y-m-d');
                },
                'contentOptions' => ['style' => 'width: 120px;']
            ],
            [
                'attribute' => 'body',
                'label' => 'Сообщение',
                'value' => 'body',
                'format' => 'raw',
                /*'value' => function ($model) {
                    return '<div>'.$model->body.'</div>';
                },*/
            ],
            [
                'attribute' => 'active',
                'label' => 'Статус',
                'format' => 'raw',    
                'filter' => [
                    1 => 'Нет',
                    0 => 'Да',
                ],
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} === 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Опубликовано' : 'Ждет модерации',
                        [
                            'class' => 'label label-' . ($active ? 'success' : 'danger'),
                        ]
                    );
                },
                'contentOptions' => ['style' => 'width: 120px;']
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($url,$model) {
                        return Html::button('Просмотр', ['data-target' => 'commentview?id='.$model->id, 'class' => 'btn modal-btn']);
                    },
                ],
                'contentOptions' => ['style' => 'width: 100px;']
            ],
        ],
        'layout' => "{items}\n{pager}\n{summary}",
        'summary' => 'Показано {count} из {totalCount}',
        'summaryOptions' => [
            'tag' => 'span',
            'class' => 'my-summary'
        ],
        'emptyText' => '<p>Список пуст</p>',
        'emptyTextOptions' => [
            'tag' => 'p'
        ],
        'pager' => [
            'firstPageLabel' => 'Первая',
            'lastPageLabel' => 'Последняя',
            'nextPageLabel' => 'Следующая',
            'prevPageLabel' => 'Предыдущая',        
            'maxButtonCount' => 5,
        ],
    ]);
    ?>
    
    <?php yii\widgets\Pjax::end(); ?>

    <?php
        Modal::begin([
            'header' => '<h3>Модерация отзыва</h3>',
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);
        
        echo "<div id='modal-content'></div>";
        
        Modal::end(); 
    ?>
    
</div>
