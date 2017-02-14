<?php

use frontend\assets\IndexAsset;
use yii\helpers\Html;
use yii\widgets\ListView;
use common\widgets\contacts\ContactFormWidget;

IndexAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Довженко';

?>

<?= ContactFormWidget::widget([    
    'header' => 'Записаться на приём',                
    'fields' => ['name', 'phone'],
    'modal' => true,
    'modalOptions' => [
        'id' => 'signer',
        'size' => 'modal-md',
        'modalLink' => false,
    ],
    'formOptions' => [
        'id' => 'signer-form',
        'class' => 'form-horizontal',
        'buttonText' => 'Отправить',
    ]
]); ?>  

<!-- Slider -->
<div class="slider">
    <div class="container">
	<div class="row">
            <div class="col-xs-12">
		<h2 class="slider_h2">Избавление<br />от зависимостей</h2>
		<h4 class="slider_h4">по методу А.Р. Довженко</h4>
                <p><button data-toggle="modal" data-target="#signer">Записаться на приём</button></p>
            </div>
	</div>
    </div>
</div>

<!-- Преимущества работы -->
<div class="work animated-steps1">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-03s">
                <img src="img/main_icon-1.png" alt="">
                <p class="work_p">Алкогольная<br />зависимость</p>
                <ul>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Универсальные методы<br />избавления от алкогольной<br />зависимости</li>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Индивидуальный подход</li>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Выявление и устранение<br />причин зависимости</li>
                </ul>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-06s">
                <img src="img/main_icon-2.png" alt="">
                <p class="work_p">Никотиновая<br />зависимость</p>
                <ul>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Бросить курить легко<br />раз и навсегда</li>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Без последствий</li>
                </ul>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-09s">
                <img src="img/main_icon-3.png" alt="">
                <p class="work_p">Коррекция<br />веса</p>
                <ul>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Коррекция веса<br />за несколько сеансов</li>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Работа с психологом</li>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Полная поддержка<br />на всех этапах лечения</li>
                </ul>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-12s">
                <img src="img/main_icon-4.png" alt="">
                <p class="work_p">Игромания</p>
                <br />
                <ul>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Индивидуальный<br />курс лечения</li>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Полное возвращение<br />к полноценной жизни</li>
                </ul>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-15s">
                <img src="img/main_icon-5.png" alt="">
                <p class="work_p">Другие виды<br />зависимостей</p>
                <ul>
                    <li class="work_li"><img src="img/main_toc.png" alt="">Поможем в любой ситуации</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------------Double--------------------------------------- -->
<div class="work_double animated-steps1-mobile">
    <div class="container text-center">
        <div class="animated-steps-item1 hidden-block delay-03s">
            <img src="img/main_icon-1.png" alt="">
            <p class="work_p">Алкогольная<br />зависимость</p>
        </div>
        <div class="animated-steps-item1 hidden-block delay-06s">
            <img src="img/main_icon-2.png" alt="">
            <p class="work_p">Никотиновая<br />зависимость</p>
        </div>            
        <div class="animated-steps-item1 hidden-block delay-09s">
            <img src="img/main_icon-3.png" alt="">
            <p class="work_p">Коррекция<br />веса</p>
        </div>
        <div class="animated-steps-item1 hidden-block delay-12s">
            <img src="img/main_icon-4.png" alt="">
            <p class="work_p">Игромания</p>
        </div>
        <div class="animated-steps-item1 hidden-block delay-15s">
            <img src="img/main_icon-5.png" alt="">
            <p class="work_p">Другие виды<br />зависимостей</p>
        </div>
    </div>
</div>

<hr />
<?= $this->render('_contactsPhone');?>

<!-- bg-1 -->
<div class="bg_one animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_one_h2">О нашем методе</h2>
            <div class="col-sm-7">
                <p class="bg_one_p"><span class="bg_one_p_b">Метод А.Р. Довженко</span> был утвержден и разрешён к применению в 1984 году.<br /><br />
                <span class="bg_one_p_b">Суть метода Довженко Александра Романовича</span> – создание стойкой психогенной установки (блокады) на воздержание употребления алкоголя и прочих психоактивных веществ (на длительное время) путем применения комплекса психологических, гипнотических и физиогенных воздействий на кору головного мозга.<br />
Всего лишь за один сеанс кодирования по методу Довженко ослабляются или блокируются «алкогольные центры удовольствия» в мозгу пациента. Вот почему после проведения сеанса сразу же исчезает губительная тяга к употреблению алкоголя, курению и прочим вредным привычкам.<br />
Метод кодирования по Довженко всецело строится на добровольном отказе самого пациента от употребления спиртного или курения.<br />
Человек, еще вчера не представлявший себе день без рюмки водки, бутылки пива или сигареты, после кодирования смотрит на них с полным безразличием или даже с отвращением. И это не фантастика!</p><p class="specialist_p"><a href="#">Подробнее...</a></p>
            </div>
            <div class="col-sm-5 text-center bg_one_img">
                <img src="img/main_icon-6.png" alt="">
                <p class="bg_one_p_dov bg_one_p_b">Довженко<br />Александр Романович</p>
            </div>
        </div>
    </div>
</div>
<!-- Double -->
<div class="bg_one_double animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_one_h2">О нашем методе</h2>
            <div class="col-sm-12 text-center">
                <img src="img/main_icon-6.png" class="bg_one_double_img" alt="dovjenko">
                <p class="bg_one_p bg_one_p_b">Довженко<br />Александр Романович</p>
            </div>
            <div class="col-sm-12">
                <p class="bg_one_p"><span class="bg_one_p_b">Метод А.Р. Довженко</span> был утвержден и разрешён к применению в 1984 году.<br /><br />
                <span class="bg_one_p_b">Суть метода Довженко Александра Романовича</span> – создание стойкой психогенной установки (блокады) на воздержание употребления алкоголя и прочих психоактивных веществ (на длительное время) путем применения комплекса психологических, гипнотических и физиогенных воздействий на кору головного мозга.<br /><br />
                Всего лишь за один сеанс кодирования по методу Довженко ослабляются или блокируются «алкогольные центры удовольствия» в мозгу пациента. Вот почему после проведения сеанса сразу же исчезает губительная тяга к употреблению алкоголя, курению и прочим вредным привычкам.<br /><br />
                Метод кодирования по Довженко всецело строится на добровольном отказе самого пациента от употребления спиртного или курения.<br /><br />
                Человек, еще вчера не представлявший себе день без рюмки водки, бутылки пива или сигареты, после кодирования смотрит на них с полным безразличием или даже с отвращением. И это не фантастика!</p><p class="specialist_p"><a href="#">Подробнее...</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Специалисты -->
<?= $this->render('_specialistSlider'); ?>

<!-- Почему выбирают нас ? -->
<div class="bg_two animated-steps2">
    <div class="container text-center animated-steps2-box hidden-block">
        <div class="row">
            <h2 class="bg_two_h2">Почему выбирают нас?</h2>
            <div class="col-md-2 bg_two_div animated-steps-item2 hidden-block delay-03s">
                <img src="img/main_icon-11.png" alt="">
                <h3 class="bg_two_h3">Быстрое<br />выздоровление</h3>
                <p class="bg_two_p">Вы избавитесь<br />от зависимости<br />за один сеанс</p>
            </div>
            <div class="col-md-2 bg_two_div animated-steps-item2 hidden-block delay-06s">
                <img src="img/main_icon-12.png" alt="">
                <h3 class="bg_two_h3">Опытные<br />специалисты</h3>
                <p class="bg_two_p">С вами будут работать<br />прямые ученики<br />А.Р.Довженко.<br />Ихстаж более 35 лет.</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item2 hidden-block delay-09s">
                <img src="img/main_icon-13.png" alt="">
                <h3 class="bg_two_h3">Забота<br />о пациенте</h3>
                <p class="bg_two_p">Вам гарантируется<br />полная анонимность<br />и уважительное<br />отношение</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item2 hidden-block delay-12s">
                <img src="img/main_icon-14.png" alt="">
                <h3 class="bg_two_h3">Надёжность<br />и эффективность<br />метода</h3>
                <p class="bg_two_p">Более 28000<br />возвращённых к<br />полноценной жизни</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item2 hidden-block delay-15s">
                <img src="img/main_icon-15.png" alt="">
                <h3 class="bg_two_h3">Гарантии<br />от срыва</h3>
                <p class="bg_two_p">Дальнейшее<br />сопровождение<br />пациентов,<br />поддержка родных<br />и близких</p>
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------------Double--------------------------------------- -->
<div class="bg_two_double animated-steps2-mobile">
    <div class="container text-center animated-steps2-box hidden-block">
        <div class="row">
            <h2 class="bg_two_h2">Почему выбирают нас?</h2>
            <div class="col-sm-4 animated-steps-item2 hidden-block delay-03s">
                <img src="img/main_icon-11.png" alt="">
                <h3 class="bg_two_h3">Быстрое<br />выздоровление</h3>
                <p class="bg_two_p">Вы избавитесь<br />от зависимости<br />за один сеанс</p>
            </div>
            <div class="col-sm-4 animated-steps-item2 hidden-block delay-06s">
                <img src="img/main_icon-12.png" alt="">
                <h3 class="bg_two_h3">Опытные<br />специалисты</h3>
                <p class="bg_two_p">С вами будут работать<br />прямые ученики<br />А.Р.Довженко.<br />Ихстаж более 35 лет.</p>
            </div>
            <div class="col-sm-4 animated-steps-item2 hidden-block delay-09s">
                <img src="img/main_icon-13.png" alt="">
                <h3 class="bg_two_h3">Забота<br />о пациенте</h3>
                <p class="bg_two_p">Вам гарантируется<br />полная анонимность<br />и уважительное<br />отношение</p>
            </div>
        </div>
    </div>
    <div class="bg_two_double_padding">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-6 animated-steps-item2 hidden-block delay-12s">
                    <img src="img/main_icon-14.png" alt="">
                    <h3 class="bg_two_h3">Надёжность<br />и эффективность<br />метода</h3>
                    <p class="bg_two_p">Более 28000<br />возвращённых к<br />полноценной жизни</p>
                </div>
                <div class="col-sm-6 animated-steps-item2 hidden-block delay-15s">
                    <img src="img/main_icon-15.png" alt="">
                    <h3 class="bg_two_h3">Гарантии<br />от срыва</h3>
                    <p class="bg_two_p">Дальнейшее<br />сопровождение<br />пациентов,<br />поддержка родных<br />и близких</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Телефон -->
<?= $this->render('_contactsPhone');?>
<hr />

<!-- Новости -->
<div class="news animated-steps3">
    <div class="container animated-steps3-box hidden-block">
        <div class="row">
            <h2 class="text-center news_h2">Новости/Статьи</h2>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,

                'itemView' => '_newsItemShort',

                'layout' => "{items}",

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
            ]);
            ?>
            <div class="col-md-12 text-left">
                <?= Html::a('Весь список', ['/news'], ['class' => 'news_color open-modal-1 news-all']) ?>
            </div>
        </div>
    </div>
</div>