<?php

use frontend\assets\FulnessAsset;
use yii\helpers\Html;
use common\widgets\contacts\ContactFormWidget;

FulnessAsset::register($this);

/* @var $this yii\web\Fulness */

$this->title = 'Коррекция веса';

?>

<!-- Slider -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-xs-12">
                    <p class="slider_one">как избавиться<br class="footer_br" /> от пищевой</p>
                    <p class="slider_two">зависимости?</p>
                    <p class="slider_border">Опытные специалисты нашего<br />Центра помогут Вам в этом!</p>
                    <p class="slider_three">Запишитесь на наши<br class="slider_br" /> оздоровительные сеансы<br />по уникальному методу<br class="slider_br" /> А.Р.Довженко</p>
            </div>
            <div class="col-sm-5 slider_cons">
                <?= ContactFormWidget::widget([                    
                    'header' => '<b>Бесплатная</b><br>консультация',
                    'fields' => ['name', 'phone'],
                    'modal' => false,
                    'formOptions' => ['id' => 'consult-form', 'class' => 'slider-form', 'buttonText' => 'Заказать'],
                ]); ?>
            </div>
        </div>
    </div>
</div>
<!-- Как мы работаем ? -->
<div class= "how_we_are_working animated-block">
    <div class="container">
        <div class="row">
            <h2 class="text-center how_we_are_working_h2">Как мы работаем ?</h2>
            <div class="col-md-12">
                <p>Сегодня для похудения используют различные диеты и физическую активность. Если этого бывает достаточно для лиц в возрасте 20-30- 35 лет, то для других возрастных групп 
                    эффект похудения, коррекции веса, не может обойтись без воздействия на «голову» пациента, на центры голода и насыщения, эмоциогенные центры аппетита. Поэтому в нашей 
                    авторизированной методологии под названием «худеем ночью» идет специфическое воздействие (торможение) на указанные центры — эмоциогенно-стрессовый сеанс с последующим 
                    программированием (кодом) на постепенное снижение веса и полноты. Одновременно рекомендуется специальная не обременительная диета и дозированная физическая нагрузка. Курс 
                    похудения рассчитан на три месяца, с контролем и коррекцией, при необходимости, один раз в месяц. Вы обязательно почувствуете себя моложе и стройнее! Успехов Вам!</p>
            </div>
        </div>
    </div>
</div>
<!-- Bg-1 -->
<div class="bg_one text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_two_h2">Всего <span class="bg_two_color">три</span> шага до избавления:</h2>
            <div class="col-md-12 bg_one_bg">
                <img src="img/mass/21.png">
            </div>
            <div class="col-xs-3">
                <p class="bg_two_p bg_two_p_one">Оставляете заявку<br />на нашем сайте</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_two_p bg_two_p_two">Мы свяжемся с Вами<br />и расскажем<br />о нашем методе</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_two_p bg_two_p_three">Посещение<br />оздоровительного<br />сеанса</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_two_p bg_two_p_four">Правильное питание<br />и активный образ<br />жизни</p>
            </div>
        </div>
    </div>
</div>

<!-- Pad -->
<div class="bg_two_double text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_two_h2">Всего <span class="bg_two_color">три</span> шага до избавления</h2>
            <div class="col-md-12 bg_one_bg">
                <img src="img/mass/11.png" class="text-center">
            </div>
            <div class="col-xs-3">
                <p class="bg_two_p bg_two_p_one">Оставляете заявку<br />на нашем сайте</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_two_p bg_two_p_two">Мы свяжемся с Вами<br />и расскажем<br />о нашем методе</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_two_p bg_two_p_three">Посещение<br />оздоровительного<br />сеанса</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_two_p bg_two_p_four">Правильное питание<br />и активный образ<br />жизни</p>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="bg_two_mobile text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_two_h2">Всего <span class="bg_two_color">три</span> шага<br />до выздоровления:</h2>
            <img src="img/mass/icon-1.png">
            <p class="bg_two_mobile_p">Оставляете заявку<br />на нашем сайте</p>
            <img src="img/mass/33.png">
            <p class="bg_two_mobile_p">Мы свяжемся с Вами<br />и расскажем<br />о нашем методе</p>
            <img src="img/mass/32.png">
            <p class="bg_two_mobile_p">Посещение<br />оздоровительного<br />сеанса</p>
            <img src="img/mass/31.png">
            <p class="bg_two_mobile_p">Правильное питание<br />и активный образ<br />жизни</p>
        </div>
    </div>
</div>
<!-- Телефон -->
<?= $this->render('_contactsPhone');?>
<!-- bg-3 -->
  <!-- PC -->
<div class="bg_three animated-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="bg_three_right"><p class="bg_three_p">Увеличение потребления<br />пищи в течение длительного<br />времени</p><img src="img/mass/icon-10.png" width="80" height="80" alt=""></div>
                <div class="bg_three_right"><p class="bg_three_p">Необходимость употреблять<br />продукты во всё большем<br />и большем количестве</p><img src="img/mass/icon-11.png" width="80" height="80" alt=""></div>
                <div class="bg_three_right"><p>Беспокойство на фоне голода.<br />В отличие от обыкновенного голода,<br />паталогическое пристрастие 
                к пище<br />характеризуется возникновением<br />беспокйства или паники во время<br />голода</p><img src="img/mass/icon-12.png" width="80" height="80" alt=""></div>
            </div>
            <div class="col-md-4">
                <div class="bg_three_center"><img src="img/mass/icon-16.png"alt=""></div>
            </div>
            <div class="col-md-4">
                <div class="bg_three_left"><img src="img/mass/icon-13.png" width="80" height="80" alt=""><p class="bg_three_p">Безуспешные попытки<br />самостоятельно прервать<br />пищевую зависимость</p></div>
                <div class="bg_three_left"><img src="img/mass/icon-14.png" width="80" height="80" alt=""><p class="bg_three_p">Упорное продолжение<br />следовательно своим привычкам,<br />несмотря на последствия</p></div>
                <div class="bg_three_left"><img src="img/mass/icon-15.png" width="80" height="80" alt=""><p>Озабоченность. Человек начинается<br />тратить больше времени, чтобы<br />
                получить желаемый продукт.<br />Перестаёт уделять внимание<br />социальной жизни и работе</p></div>
            </div>
        </div>
    </div>
</div>
<!-- PAD -->
<div class="bg_three_pad animated-block">
    <div class="container">
        <div class="row">
            <div class="bg_three_center_pad"><img src="img/mass/icon-16.png"alt=""></div>
            <div class="col-md-12 bg_three_pad_md">
                <div class="bg_three_left"><img src="img/mass/icon-10.png"alt=""><p class="bg_three_p_pad">Увеличение потребления<br />пищи в течение<br />длительного времени</p></div>
                <div class="bg_three_left"><img src="img/mass/icon-11.png"alt=""><p class="bg_three_p_pad">Необходимость употреблять продукты во всё<br />большем и большем количестве</p></div>
                <div class="bg_three_left"><img src="img/mass/icon-12.png"alt=""><p class="bg_three_p">Беспокойство на фоне голода. В отличие<br />от обыкновенного голода, паталогическое<br />пристрастие 
                к пище характеризуется возникновением<br />беспокйства или паники во время голода</p></div>
                <div class="bg_three_left"><img src="img/mass/icon-13.png"alt=""><p class="bg_three_p_pad">Безуспешные попытки самостоятельно прервать<br />пищевую зависимость</p></div>
                <div class="bg_three_left"><img src="img/mass/icon-14.png"alt=""><p class="bg_three_p_pad">Упорное продолжение следовательно своим<br />привычкам, несмотря на последствия</p></div>
                <div class="bg_three_left"><img src="img/mass/icon-15.png"alt=""><p class="bg_three_p_pad">Озабоченность. Человек начинается тратить больше<br />времени, чтобы 
                получить желаемый продукт.<br />Перестаёт уделять внимание социальной жизни<br />и работе</p></div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="bg_three_mobile text-center animated-block">
    <div class="container">
        <div class="row">
            <div class="bg_three_mobile_padding"><img src="img/mass/icon-16.png"alt=""></div>
            <div class="bg_three_mobile_padding_two"><img src="img/mass/icon-10.png"alt=""><p class="bg_three_mobile_padding_p">Увеличение потребления<br />пищи в течение<br />длительного времени</p></div>
                    <img src="img/mass/icon-11.png"alt=""><p class="bg_three_mobile_padding_p">Необходимость употреблять продукты во всё<br />большем и большем количестве</p>
            <div class="bg_three_mobile_padding_two"><img src="img/mass/icon-12.png"alt=""><p class="bg_three_mobile_padding_p">Беспокойство на фоне голода. В отличие<br />от обыкновенного голода, паталогическое<br />пристрастие 
            к пище характеризуется возникновением<br />беспокйства или паники во время голода</p></div>
                    <img src="img/mass/icon-13.png"alt=""><p class="bg_three_mobile_padding_p">Безуспешные попытки самостоятельно прервать<br />пищевую зависимость</p>
            <div class="bg_three_mobile_padding_two"><img src="img/mass/icon-14.png"alt=""><p class="bg_three_mobile_padding_p">Упорное продолжение следовательно своим<br />привычкам, несмотря на последствия</p></div>
                    <img src="img/mass/icon-15.png"alt=""><p class="bg_three_mobile_padding_p">Озабоченность. Человек начинается тратить больше<br />времени, чтобы 
            получить желаемый продукт.<br />Перестаёт уделять внимание социальной жизни<br />и работе</p>
        </div>
    </div>
</div>
<!-- Преимущества работы -->
<div class="work animated-steps1">
    <div class="container text-center animated-steps1-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества работы с нами:</h2>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-03s">
                <img src="img/mass/icon-5.png" alt="">
                <p class="work_p">Быстрый<br />результат</p>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-06s">
                <img src="img/mass/icon-6.png" alt="">
                <p class="work_p">Полная<br />анонимность</p>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-09s">
                <img src="img/mass/icon-7.png" alt="">
                <p class="work_p">Уникальный<br />метод</p>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-12s">
                <img src="img/mass/icon-8.png" alt="">
                <p class="work_p">Работа<br />с психологом</p>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-15s">
                <img src="img/mass/icon-9.png" alt="">
                <p class="work_p">Надёжно<br />и безопасно</p>
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------------Double--------------------------------------- -->
<div class="work_double animated-steps1-pad">
    <div class="container text-center animated-steps1-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества работы с нами:</h2>
            <div class="col-xs-4 animated-steps-item1 hidden-block delay-03s">
                <img src="img/mass/icon-5.png" alt="">
                <p class="work_p">Быстрый<br />результат</p>
            </div>
            <div class="col-xs-4 animated-steps-item1 hidden-block delay-06s">
                <img src="img/mass/icon-6.png" alt="">
                <p class="work_p">Полная<br />анонимность</p>
            </div>
            <div class="col-xs-4 animated-steps-item1 hidden-block delay-09s">
                <img src="img/mass/icon-7.png" alt="">
                <p class="work_p">Уникальный<br />метод</p>
            </div>
        </div>
    </div>
    <div class="work_double_padding">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-6 work_double_col animated-steps-item1 hidden-block delay-12s">
                    <img src="img/mass/icon-8.png" alt="">
                    <p class="work_p">Работа<br />с психологом</p>
                </div>
                <div class="col-xs-6 work_double_col animated-steps-item1 hidden-block delay-15s">
                    <img src="img/mass/icon-9.png" alt="">
                    <p class="work_p">Надёжно<br />и безопасно</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="work_mobile animated-steps1-mobile">
    <div class="container text-center animated-steps1-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества<br class="footer_br" />работы с нами:</h2>
            <div class="col-md-12">
                <div class="animated-steps-item1 hidden-block delay-03s">
                    <img src="img/mass/icon-5.png" alt="">
                    <p class="work_mobile_p">Быстрый<br />результат</p>
                </div>
                <div class="animated-steps-item1 hidden-block delay-06s">
                    <img src="img/mass/icon-6.png" alt="">
                    <p class="work_mobile_p">Полная<br />анонимность</p>
                </div>
                <div class="animated-steps-item1 hidden-block delay-09s">
                    <img src="img/mass/icon-7.png" alt="">
                    <p class="work_mobile_p">Уникальный<br />метод</p>
                </div>
                <div class="animated-steps-item1 hidden-block delay-12s">
                    <img src="img/mass/icon-8.png" alt="">
                    <p class="work_mobile_p">Работа<br />с психологом</p>
                </div>
                <div class="animated-steps-item1 hidden-block delay-15s">
                    <img src="img/mass/icon-9.png" alt="">
                    <p class="work_mobile_p">Надёжно<br />и безопасно</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Довженко -->
<div class="dovjenko animated-block">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <img src="img/mass/kov-bg-3.png" alt="">
                <p class="dovjenko_p_one">Год назад я весила 88 кг при просте 164 см. В центр обратилась по совету знакомых и не пожалела! До этого я неоднократно пыталась 
                сбросить вес самостоятельно, но потом набирала ещё больше ненавистных килограммов.<br />Но после лечения по методу Довженко всё изменилось! Я потеряла 22 кг.<br />Спасибо большое!</p>
                <p class="dovjenko_p_two">Елена, 51 год</p>
                <img src="img/mass/icon-17.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Телефон -->
<?= $this->render('_contactsPhone');?>
<!-- Как бороться с пищевой зависимостью ? -->
<div class="whats_happening animated-block">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Как бороться с пищевой<br /><span class="whats_happening_h3">зависимостью ?</span></h3>
            <div class="col-xs-12">
                <p class="whats_happening_p">В нашей экспресс-методике используется модифицированное «кодирование» по А.Р. Довженко.<br />Наш метод полностью безмедикаментозный и начинает действовать уже после одного сеанса!<br /> 
                    Наши специалисты помогут Вам сделать ряд шагов, которые<br />приведут к наилучшим результатам лечения:</p>
            </div>
            <div class="col-xs-12 whats_happening_marker">
                <img class="whats_happening_marker_img" src="img/mass/icon-18.png" alt="">
                <div class="whats_happening_padding">
                    <p>Регулярные физические<br />упражнения</p>
                </div>
            </div>
            <div class="col-xs-12 whats_happening_marker">
                <img class="whats_happening_marker_img" src="img/mass/icon-19.png" alt="">
                <div class="whats_happening_padding">
                    <p>Контроль над стрессом.<br />Медитация, расслабления,<br />музыка и физическая<br />нагрузка помогут Вам<br />в лечении паталогического<br />пристрастия к пище</p>
                </div>
            </div>
            <div class="col-xs-12 whats_happening_marker">
                <img class="whats_happening_marker_img" src="img/mass/icon-20.png" alt="">
                <div class="whats_happening_padding">
                    <p>Закаливание<br />организма</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -------------------------------------Double--------------------------------------- -->
<div class="double_whats_happening animated-block">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Как бороться с пищевой<br /><span class="double_whats_happening_h3">зависимостью ?</span></h2>
            <div class="col-md-12">
                <p class="double_whats_happening_p_one">В нашей экспресс-методике используется модифицированное «кодирование» по А.Р. Довженко.<br />Наш метод полностью безмедикаментозный и начинает действовать уже после одного сеанса!<br /> 
                    Наши специалисты помогут Вам сделать ряд шагов, которые<br />приведут к наилучшим результатам лечения:</p>
            </div>
            <div class="col-xs-4 double_whats_happening_marker">
                <img src="img/mass/icon-18.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Регулярные физические<br />упражнения</p>
                </div>
            </div>
            <div class="col-xs-4 double_whats_happening_marker">
                <img src="img/mass/icon-19.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_three">Контроль над стрессом.<br />Медитация, расслабления,<br />музыка и физическая<br />нагрузка помогут Вам<br />в лечении паталогического<br />пристрастия к пище</p>
                </div>
            </div>
            <div class="col-xs-4 double_whats_happening_marker">
                <img src="img/mass/icon-18.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Закаливание<br />организма</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Контакты -->
<?= $this->render('_contacstMap'); ?>