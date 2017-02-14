<?php

use frontend\assets\SideAsset;

SideAsset::register($this);

/* @var $this yii\web\About */

$this->title = 'Наши публикации';

?>

<!-- Публикации -->
<div class="container ow">
    <h1>Наши публикации</h1>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/tik_2013_01_95.pdf" target="_blank">
                <img src="img/ow/book1.jpg" alt="book1">
                <div class="book-title">
                    <p>Специальный выпуск журнала<br>«Трезвость и культура» №1, 2013;<br>95-летний юбилей А.Р. Довженко</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/viderjki.pdf" target="_blank">
                <img src="img/ow/book2.jpg" alt="book2">
                <div class="book-title">
                    <em>О.В. Новиков, П.В. Борисовский</em><br><p>«Александр Романович Довженко - <br>«отец» современного метода <br>«кодировния» от алкоголизма. Двадцать лет спустя...»</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/borisovsky_book.pdf" target="_blank">
                <img src="img/ow/book3.jpg" alt="book3">
                <div class="book-title">
                    <em>П.В. Борисовский </em><br><p>«ДАР. Довженко Александр Романович –<br>отец современного метода<br>«кодирования» от алкоголизма»</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/psi_dovjenko_book.pdf" target="_blank">
                <img src="img/ow/book4.jpg" alt="book4">
                <div class="book-title">
                    <em>О.В. Новиков,<br>Г.З. Шакирзянов<br>П.В. Борисовский</em><br><p>«Психотерапия по Довженко.<br>Секреты кодирования»</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/TiK_2012.pdf" target="_blank">
                <img src="img/ow/book5.jpg" alt="book5">
                <div class="book-title">
                    <p>Журнал «Трезвость и Культура»<br>2012</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/posobie_cover.pdf" target="_blank">
                <img src="img/ow/book6.jpg" alt="book6">
                <div class="book-title">
                    <p>Метод Довженко по избавлению<br>от алкогольного пристрастия</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/interview.pdf" target="_blank">
                <img src="img/ow/book7.jpg" alt="book7">
                <div class="book-title">
                    <p>Интервью с П.В. Борисовским,<br>журнал «Культура здоровой жизни»<br>№6, 2011, стр. 28-33.</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/2008.pdf" target="_blank">
                <img src="img/ow/book8.jpg" alt="book8">
                <div class="book-title">
                    <p>Журнал «Трезвость и Культура»<br>2008</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/2009.pdf" target="_blank">
                <img src="img/ow/book9.jpg" alt="book9">
                <div class="book-title">
                    <p>Журнал «Трезвость и Культура»<br>2009</b>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-6 ow_padding">
        <div class="book-box">
            <a href="files/2011.pdf" target="_blank">
                <img src="img/ow/book10.jpg" alt="book10">
                <div class="book-title">
                    <p>Журнал «Трезвость и Культура»<br>2011</b>
                </div>
            </a>
        </div>
    </div>
</div>

<hr />
<?= $this->render('_contactsPhone'); ?>