<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Inflector;
$this->title = 'Управление новостями';
?>
<div class="site-index">

    <h1>Управление новостями</h1>

    <?= Html::button('Добавить новость', ['data-target' => 'newsview', 'class' => 'btn btn-primary modal-btn']);?>
    
    <?php yii\widgets\Pjax::begin(['id' => 'news-list']); ?>

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
                'attribute' => 'date_create',
                'label' => 'Дата создания',
                'value' => function ($model, $key, $index, $column) {
                    $date = new DateTime($model->date_create);
                    return $date->format('Y-m-d');
                },
                'contentOptions' => ['style' => 'width: 120px;']
            ],
            [            
                'attribute' => 'date_published',
                'label' => 'Дата публикации',
                'value' => function ($model, $key, $index, $column) {
                    if ($model->active === 1) {
                        $date = new DateTime($model->date_published);
                        return $date->format('Y-m-d');    
                    }
                    else {
                        return 'нет';
                    }                    
                },
                'contentOptions' => ['style' => 'width: 140px;']
            ],
            [
                'attribute' => 'date_update',
                'label' => 'Дата изменения',
                'value' => 'date_update',
                'contentOptions' => ['style' => 'width: 160px;']
            ],
            [
                'attribute' => 'title',
                'label' => 'Заголовок',
                'value' => 'title',                
            ],
            [
                'attribute' => 'active',
                'label' => 'Статус',
                'format' => 'raw',    
                'filter' => [
                    1 => 'Опубликовано',
                    0 => 'Не опубликовано',
                ],
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} === 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Опубликовано' : 'Не опубликовано',
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
                        return Html::button('Просмотр', ['data-target' => 'newsview?id='.$model->id, 'class' => 'btn modal-btn']);
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
            'header' => '<h3>Добавление новостей</h3>',
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);
        
        echo "<div id='modal-content'></div>";
        
        Modal::end(); 
    ?>
    
</div>
