<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use common\widgets\contacts\ContactFormWidget;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */

$this->title = 'КПК ФинброкЪ';

?>

<?= ContactFormWidget::widget([    
    'header' => 'Связаться с нами',
    'fields' => [
        [
            'name' => 'name',
            'label' => 'Ваше имя',
            'required' => true            
        ], 
        [
            'name' => 'phone',
            'label' => 'Ваше телефон',
            'required' => true            
        ],
    ],
    'modal' => true,
    'modalOptions' => [
        'id' => 'signer',
        'size' => 'modal-md',
        'modalLink' => true,
        'modalTag' => 'p',
        'modalLabel' => 'Обратный звонок',
        'modalLabelClass' => 'open-callback'
    ],
    'formOptions' => [
        'id' => 'callback-form',
        'class' => 'form-horizontal',
        'buttonText' => 'Отправить',
    ]
]); ?>

<?= DateTimePicker::widget([
    'name' => 'dp_1',
    'type' => DateTimePicker::TYPE_INPUT,
    'value' => '23-Feb-1982 10:10',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd-M-yyyy hh:ii'
    ]
]);?>

<!-- Новости -->
<div class="news animated-steps3">
    <div class="container animated-steps3-box hidden-block">
        <div class="row">
            <h2 class="text-center news_h2">Новости/Статьи</h2>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,

                'itemView' => '_newsItemShort',

                'layout' => "{items}",

                'summaryOptions' => [
                    'tag' => 'span',
                    'class' => 'my-summary'
                ],

                'itemOptions' => [
                    'tag' => 'div',
                    'class' => 'news-item',
                ],

                'emptyText' => '<p>Список пуст</p>',
                'emptyTextOptions' => [
                    'tag' => 'p'
                ],
            ]);
            ?>
            <div class="col-md-12 text-left">
                <?= Html::a('Весь список', ['/news'], ['class' => 'news_color open-modal-1 news-all']) ?>
            </div>
        </div>
    </div>
</div>