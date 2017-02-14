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
    'fields' => ['name', 'phone', 'email', 'text'],
    'modal' => true,
    'modalOptions' => [
        'id' => 'callback',
        'size' => 'modal-md',
        'modalLink' => false,
        'modalTag' => 'a',
        'modalLabel' => 'Заказать обратный звонок',
        'modalLabelClass' => 'open-modal-1'
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
    
</div>
    
<?= $content ?>

<div class="footer">

</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
