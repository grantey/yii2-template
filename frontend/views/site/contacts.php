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

<div class="container-fluid text-center" style="background: #DCE3E9; padding: 20px 0">
    <div class="container">
        <p><b>Адрес:</b> Москва, 3-й Павловский переулок, дом 1, корп. 57, стр. 3,<br/>Офисный центр "М- стиль"<br />
        <b>Телефоны:</b> 8 (495) 212-18-08 (многоканальный)<br />
        <b>Электр. почта:</b> <a href="mailto:info@dovjenko-center.ru">info@dovjenko-center.ru</a></p>
    </div>
</div>
<div class="container kak-dobratsa">
    <p><b>Как добраться (от м. Серпуховская):</b><br />
    От метро 10-12 минут пешком по Большой Серпуховской улице, идти против движения автотранспорта до пересечения 
    с 3-м Павловским переулком, по нему налево до здания 1, корп.57, cтp.3. с надписью "офисный центр М-стиль". 
    Центр Довженко А.Р. находится на 3-м этаже, офис 201.</p>    
</div>
    

<!-- Контакты -->
<?= $this->render('_contacstMap'); ?>