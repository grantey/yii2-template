<?php
use yii\helpers\Html;
use yii\helpers\StringHelper;

?>
 
<div>
    <p class="news-title"><?= Yii::$app->formatter->asDate($model->date_published); ?> <span><?= $model->title ?></span></p>
    <p><i><?= StringHelper::truncate($model->preview, Yii::$app->params['newsLongTruncate']); ?></i></p>
    <?= Html::a('Подробнее...', [$model->alias], ['class' => '']) ?>
</div>
<br>