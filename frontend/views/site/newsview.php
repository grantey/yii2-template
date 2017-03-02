<?php

use frontend\assets\SideAsset;
use yii\helpers\Html;

SideAsset::register($this);

$this->title = $model->title;
?>
 
<div class="container text-justify">
    <h1><?= $model->title ?></h1>    
    <p><b><?= $model->date_published ?></b></p>    
    <p><i><?= $model->preview ?></i></p>
    <div>
        <?= $model->text ?>
    </div>
    
    <?= Html::a('Все новости', '/news') ?>
</div>
<br><br>