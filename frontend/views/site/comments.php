<?php

/* @var $this yii\web\View */

use frontend\assets\SideAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\ListView;

SideAsset::register($this);

$this->title = 'Отзывы о работе Довженко';
?>

<div class="container">
    <h1>Отзывы</h1>
    
    <div class="row text-center">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin([
                'id' => 'order-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-sm-12\">{input}</div>\n<div class=\"col-sm-12 \">{error}</div>",
                    'labelOptions' => ['class' => 'control-label'],
                ],
            ]); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Ваше имя']) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Ваш отзыв']) ?>

                    <?= Html::submitButton('Отправить', ['class' => '', 'name' => 'comment-button']) ?>


            <?php ActiveForm::end(); ?>
            
            <?= common\widgets\Alert::widget(); ?>
            
<!--            <div class="contact-form-alerts">
                <div class="alert alert-success" id="order-form-success">Спасибо за обращение!</div>
                <div class="alert alert-danger" id="order-form-danger">Ошибка при отправке сообщения</div>
            </div>-->
        </div>
        <div class="col-lg-3"></div>
    </div>
    
    <?= ListView::widget([
        'dataProvider' => $dataProvider,

        'itemView' => '_commentItem',

        'layout' => "{items}\n{pager}",
        'summary' => 'Показано {count} из {totalCount}',
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

        'pager' => [
            'firstPageLabel' => 'Первая',
            'lastPageLabel' => 'Последняя',
            'nextPageLabel' => 'Следующая',
            'prevPageLabel' => 'Предыдущая',        
            'maxButtonCount' => 5,
        ],
    ]);
    ?>
</div>