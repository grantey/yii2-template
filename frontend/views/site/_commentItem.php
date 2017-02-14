<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
 
<div>
    <hr>
    <p class="comment-title"><?= Yii::$app->formatter->asDate($model->date); ?> <span><?= $model->name ?></span></p>
    <p><?= HtmlPurifier::process($model->body) ?></p>
</div>