<?php
use yii\helpers\Html;
use yii\helpers\StringHelper;

Yii::$app->formatter->locale = 'ru-RU';
?>
 
<div class="col-md-4 col-sm-4 animated-steps-item3 hidden-block delay-<?=($index===0?'04':($index===1?'08':'12'))?>s">    
    <p><?= Yii::$app->formatter->asDate($model->date_published); ?></p>
    <h5 class="news_h5"><?= $model->title ?></h5>
    <p><?= StringHelper::truncate($model->preview, Yii::$app->params['newsShortTruncate']); ?></p>
    <p class="specialist_p_p"><?= Html::a('Читать полностью...»', [$model->alias], ['class' => '']) ?></p>
</div>
