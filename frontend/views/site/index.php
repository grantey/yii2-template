<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use common\widgets\contacts\ContactFormWidget;

/* @var $this yii\web\View */

$this->title = 'Довженко';

?>

<?= ContactFormWidget::widget([    
    'header' => 'Записаться на приём',                
    'fields' => ['name', 'phone'],
    'modal' => true,
    'modalOptions' => [
        'id' => 'signer',
        'size' => 'modal-md',
        'modalLink' => false,
    ],
    'formOptions' => [
        'id' => 'signer-form',
        'class' => 'form-horizontal',
        'buttonText' => 'Отправить',
    ]
]); ?>  

<!-- Телефон -->
<?= $this->render('_contactsPhone');?>
<hr />

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