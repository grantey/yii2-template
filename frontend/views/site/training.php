<?php

use frontend\assets\SideAsset;
use yii\helpers\Html;

SideAsset::register($this);

/* @var $this yii\web\Training */

$this->title = 'Обучение';

?>

<!-- Специалисты центра -->
<div class="container kurs">
    <h1>Курсы обучения методу Довженко</h1>
    <div class="col-md-12">
        <p class="kurs_p">На базе Московского центра имени А.Р. Довженко ежеквартально проводятся единственные в своём роде учебные курсы по избавлению от алкогольной и табачной зависимости уникальным методом Народного врача СССР А.Р. Довженко. </p>
        <p class="kurs_p">Приглашаются врачи, психологи, наркологи, сотрудники оздоровительных центров и региональных обществ трезвости и здоровья.<br />Преподаватели курсов – прямые ученики Довженко, а также приглашённые учёные и специалисты. </p>
        <p class="kurs_p">Помимо базовых знаний по наркологии, психотерапии и психологии обучающиеся узнают о секретах психотехники «кодирования по Довженко», тайнах трансового суггестивного внушения и формирования стойких оздоровительных ремиссий и многое другое. </p>
        <p class="kurs_p">По окончанию учебных курсов выдаётся Сертификат и специальная методическая литература. </p>
        <p class="kurs_p">Телефоны: <a href="tel:+74952121808">+7 (495) 212-18-08</a> (многоканальный)<br />Электр. почта: <a href="mailto:info@dovjenko-center.ru">info@dovjenko-center.ru</a></p>
        <p class="text-right kurs_b">Руководитель курсов повышения квалификации МЦИ А.Р. Довженко:</p>
        <p class="text-right kurs_b"><?= Html::a('Новиков Олег Васильевич', Yii::$app->request->baseUrl."/specialists#spec2", ['target' => '_blank']); ?></p>
        <div class="kurs_foto"><img src="img/kurs/foto1.jpg"></div>
        <div class="kurs_foto"><img src="img/kurs/foto2.jpg"></div>
        <div class="kurs_foto"><img src="img/kurs/foto3.jpg"></div>
    </div>
</div>

<hr />
<?= $this->render('_contactsPhone'); ?>