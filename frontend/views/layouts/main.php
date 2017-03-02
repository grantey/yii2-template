<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\contacts\ContactFormWidget;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <?php $this->head() ?>   
    
</head>
<body>
<?php $this->beginBody() ?>
    
<?= ContactFormWidget::widget([    
    'header' => 'Заявка на обратный звонок',                
    'fields' => [
        [
            'name' => 'name',
            'label' => 'Ваше имя',
            'required' => true
        ],
        [
            'name' => 'phone',
            'label' => 'Ваш телефон',
            'required' => true
        ],
        [
            'name' => 'email',
            'label' => 'Ваш E-mail',
            'required' => false
        ],
        [
            'name' => 'text',
            'label' => 'Сообщение',
            'required' => false
        ],
    ],
    'modal' => true,
    'modalOptions' => [
        'id' => 'callback',
        'size' => 'modal-md',
        'modalLink' => false,
    ],
    'formOptions' => [
        'id' => 'callback-form',
        'class' => 'form-horizontal',
        'buttonText' => 'Отправить',
    ]
]); ?>      

<div class="header">

</div>

<div class="container-fluid menu_main">

</div>
    
<?= $content ?>

<div class="footer">
    <?= ContactFormWidget::widget([
        'header' => 'Подписаться на рассылку новостей',
        'fields' => [
            [
                'name' => 'name',
                'label' => 'Ваше имя',
                'required' => true
            ],
            [
                'name' => 'email',
                'label' => 'Ваше E-mail',
                'required' => true
            ]
        ],
        'modal' => true,
        'modalOptions' => [
            'id' => 'sending',
            'size' => 'modal-md',
            'modalLink' => true,
            'modalTag' => 'p',
            'modalLabel' => 'Подписаться на рассылку',
            'modalLabelClass' => 'open-sending'
        ],
        'formOptions' => [
            'id' => 'sending-form',
            'class' => 'form-horizontal',
            'buttonText' => 'Отправить',
        ]
    ]); ?> 
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
