<?php

use frontend\assets\SideAsset;
use yii\helpers\Html;
use common\widgets\contacts\ContactFormWidget;

SideAsset::register($this);

$this->registerJsFile('https://api-maps.yandex.ru/2.1/?lang=ru_RU');

/* @var $this yii\web\About */

$this->title = 'Контакты';

?>

<h1>Наши контакты</h1>

<!-- Контакты -->
<?= $this->render('_contacstMap'); ?>