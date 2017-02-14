<?php

use frontend\assets\GamingAsset;
use yii\helpers\Html;
use common\widgets\contacts\ContactFormWidget;

GamingAsset::register($this);

/* @var $this yii\web\Fulness */

$this->title = 'Игровая зависимость';

?>

<!-- Slider -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-xs-12">
                <p class="slider_one">как избавиться<br class="footer_br" /> от игровой</p>
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
                <p>Главное отличие игровой зависисмости от алкоголизма в том, что человек зависим от процесса, происходящего в его голове, а не от химического вещества. Организм страдает от такой зависимости меньше, а психика, отношения с окружающими куда больше. Но можно научить использовать энергию азарта не в играх, а в многих продуктивных направлениях.</p>
            </div>
        </div>
    </div>
</div>
<!-- Bg-1 -->
<div class="bg_one text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_two_h2">Всего <span class="bg_two_color">три</span> шага до возвращения к нормальной жизни:</h2>
            <div class="col-md-12 bg_one_bg">
                <img src="img/igromania/21.png">
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
                <p class="bg_two_p bg_two_p_four">Полное избавление<br />от игромании</p>
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
                <img src="img/igromania/11.png" class="text-center">
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
                <p class="bg_two_p bg_two_p_four">Полное избавление<br />от игромании</p>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="bg_two_mobile text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_two_h2">Всего <span class="bg_two_color">три</span> шага<br />до выздоровления:</h2>
            <img src="img/igromania/icon-1.png">
            <p class="bg_two_mobile_p">Оставляете заявку<br />на нашем сайте</p>
            <img src="img/igromania/33.png">
            <p class="bg_two_mobile_p">Мы свяжемся с Вами<br />и расскажем<br />о нашем методе</p>
            <img src="img/igromania/32.png">
            <p class="bg_two_mobile_p">Посещение<br />оздоровительного<br />сеанса</p>
            <img src="img/igromania/31.png">
            <p class="bg_two_mobile_p">Полное избавление<br />от игромании</p>
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
                <div class="bg_three_right"><p class="bg_three_p">Играете<br />на большие суммы</p><img src="img/igromania/icon-5.png" width="80" height="80" alt=""></div>
                <div class="bg_three_right"><p class="bg_three_p">Необходимость проводить всё<br />больше времени за игровыми<br />автоматами или в казино</p><img src="img/igromania/icon-7.png" width="80" height="80" alt=""></div>
                <div class="bg_three_right"><p class="bg_three_p">Возникает желание увеличить<br />размер или частоту ставок, чтобы<br />достичь азартного возбуждения</p><img src="img/igromania/icon-9.png" width="80" height="80" alt=""></div>
            </div>
            <div class="col-md-4">
                <div class="bg_three_center"><img src="img/igromania/icon-11.png"alt=""></div>
            </div>
            <div class="col-md-4">
                <div class="bg_three_left"><img src="img/igromania/icon-6.png" width="80" height="80" alt=""><p class="bg_three_p">Чувство беспокойства,<br />раздражительности, ярости,<br />если игра срывается</p></div>
                <div class="bg_three_left"><img src="img/igromania/icon-8.png" width="80" height="80" alt=""><p class="bg_three_p">Пытались сократить<br />ставки или выйти<br />из игры, но срывались</p></div>
                <div class="bg_three_left"><img src="img/igromania/icon-10.png" width="80" height="80" alt=""><p>Начинаете брать деньги в долг,<br />чтобы отыграться и продолжаете<br />играть, несмотря на растущие<br />долги и проблемы в семье</p></div>
            </div>
        </div>
    </div>
</div>
<!-- PAD -->
<div class="bg_three_pad animated-block">
    <div class="container">
        <div class="row">
            <div class="bg_three_center_pad"><img src="img/igromania/icon-11.png"alt=""></div>
            <div class="col-md-12 bg_three_pad_md">
                <div class="bg_three_left"><img src="img/igromania/icon-5.png"alt=""><p class="bg_three_p_pad">Играете<br />на большие суммы</p></div>
                <div class="bg_three_left"><img src="img/igromania/icon-7.png"alt=""><p class="bg_three_p_pad">Необходимость проводить всё больше времени<br />за игровыми автоматами или в казино</p></div>
                <div class="bg_three_left"><img src="img/igromania/icon-9.png"alt=""><p class="bg_three_p">Возникает желание увеличить размер или частоту<br />ставок, чтобы достичь азартного возбуждения</p></div>
                <div class="bg_three_left"><img src="img/igromania/icon-6.png"alt=""><p class="bg_three_p_pad">Чувство беспокойства, раздражительности, ярости,<br />если игра срывается</p></div>
                <div class="bg_three_left"><img src="img/igromania/icon-8.png"alt=""><p class="bg_three_p_pad">Пытались сократить ставки или выйти<br />из игры, но срывались</p></div>
                <div class="bg_three_left"><img src="img/igromania/icon-10.png"alt=""><p class="bg_three_p_pad">Начинаете брать деньги в долг, чтобы отыграться<br />и продолжаете играть, несмотря на растущие долги<br />и проблемы в семье</p></div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="bg_three_mobile text-center animated-block">
    <div class="container">
        <div class="row">
            <div class="bg_three_mobile_padding"><img src="img/igromania/icon-11.png"alt=""></div>
            <div class="bg_three_mobile_padding_two"><img src="img/igromania/icon-5.png"alt=""><p class="bg_three_mobile_padding_p">Играете<br />на большие суммы</p></div>
            <img src="img/igromania/icon-7.png"alt=""><p class="bg_three_mobile_padding_p">Необходимость проводить всё больше времени<br />за игровыми автоматами или в казино</p>
            <div class="bg_three_mobile_padding_two"><img src="img/igromania/icon-9.png"alt=""><p class="bg_three_mobile_padding_p">Возникает желание увеличить размер или частоту<br />ставок, чтобы достичь азартного возбуждения</p></div>
            <img src="img/igromania/icon-6.png"alt=""><p class="bg_three_mobile_padding_p">Чувство беспокойства, раздражительности, ярости,<br />если игра срывается</p>
            <div class="bg_three_mobile_padding_two"><img src="img/igromania/icon-8.png"alt=""><p class="bg_three_mobile_padding_p">Пытались сократить ставки или выйти<br />из игры, но срывались</p></div>
            <img src="img/igromania/icon-10.png"alt=""><p class="bg_three_mobile_padding_p">Начинаете брать деньги в долг, чтобы отыграться<br />и продолжаете играть, несмотря на растущие долги<br />и проблемы в семье</p>
        </div>
    </div>
</div>
<!-- Преимущества работы -->
<div class="work animated-steps1">
    <div class="container text-center animated-steps1-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества работы с нами:</h2>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-03s">
                <img src="img/igromania/icon-12.png" alt="">
                <p class="work_p">Быстрый<br />результат</p>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-06s">
                <img src="img/igromania/icon-13.png" alt="">
                <p class="work_p">Полная<br />анонимность</p>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-09s">
                <img src="img/igromania/icon-14.png" alt="">
                <p class="work_p">Уникальный<br />метод</p>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-12s">
                <img src="img/igromania/icon-15.png" alt="">
                <p class="work_p">Работа<br />с психологом</p>
            </div>
            <div class="col-sm-2 work_div animated-steps-item1 hidden-block delay-15s">
                <img src="img/igromania/icon-16.png" alt="">
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
                <img src="img/igromania/icon-12.png" alt="">
                <p class="work_p">Быстрый<br />результат</p>
            </div>
            <div class="col-xs-4 animated-steps-item1 hidden-block delay-06s">
                <img src="img/igromania/icon-13.png" alt="">
                <p class="work_p">Полная<br />анонимность</p>
            </div>
            <div class="col-xs-4 animated-steps-item1 hidden-block delay-09s">
                <img src="img/igromania/icon-14.png" alt="">
                <p class="work_p">Уникальный<br />метод</p>
            </div>
        </div>
    </div>
    <div class="work_double_padding">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-6 work_double_col animated-steps-item1 hidden-block delay-12s">
                    <img src="img/igromania/icon-15.png" alt="">
                    <p class="work_p">Работа<br />с психологом</p>
                </div>
                <div class="col-xs-6 work_double_col animated-steps-item1 hidden-block delay-15s">
                    <img src="img/igromania/icon-16.png" alt="">
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
                    <img src="img/igromania/icon-12.png" alt="">
                    <p class="work_mobile_p">Быстрый<br />результат</p>
                </div>
                <div class="animated-steps-item1 hidden-block delay-06s">
                    <img src="img/igromania/icon-13.png" alt="">
                    <p class="work_mobile_p">Полная<br />анонимность</p>
                </div>
                <div class="animated-steps-item1 hidden-block delay-09s">
                    <img src="img/igromania/icon-14.png" alt="">
                    <p class="work_mobile_p">Уникальный<br />метод</p>
                </div>
                <div class="animated-steps-item1 hidden-block delay-12s">
                    <img src="img/igromania/icon-15.png" alt="">
                    <p class="work_mobile_p">Работа<br />с психологом</p>
                </div>
                <div class="animated-steps-item1 hidden-block delay-15s">
                    <img src="img/igromania/icon-16.png" alt="">
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
                <img src="img/igromania/kov-bg-3.png" alt="">
                <p class="dovjenko_p_one">Специалисты центра можно сказать спасли мою семью. Проблема была во мне – азартные игры. Играл по-черному. После пяти собеседований на свою жизнь взглянул по-другому. Играть в азартные игры стало просто некогда да и неинтересно. Семье стал уделять больше внимания. Жена и дочка ценят. Что еще нужно нормальному человеку? Всем советую, если какие проблемы.</p>
                <p class="dovjenko_p_two">Дмитрий, 46 лет</p>
                <img src="img/igromania/icon-17.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Телефон -->
<?= $this->render('_contactsPhone');?>
<!-- Как бороться с игровой зависимостью ? -->
<div class="whats_happening animated-block">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Лечение игровой<br /><span class="double_whats_happening_h3">зависимости</span></h2>
            <div class="col-md-12">
                <p class="double_whats_happening_p_one">Игровая зависимость является психологической, поэтому и лечение<br />надо осуществлять психологическими методами.<br />
                    Наши специалисты осуществляют эффективное лечение<br />от ряда психологических зависимостей:</p>
            </div>
            <div class="col-xs-6 double_whats_happening_marker">
                <img src="img/igromania/icon-18.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от игровых автоматов</p>
                </div>
            </div>
            <div class="col-xs-6 double_whats_happening_marker">
                <img src="img/igromania/icon-19.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от казино</p>
                </div>
            </div>
            <div class="col-xs-6 double_whats_happening_marker">
                <img src="img/igromania/icon-20.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от компьютерных игр</p>
                </div>
            </div>
            <div class="col-xs-6 double_whats_happening_marker">
                <img src="img/igromania/icon-20.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение<br />Интернет-зависимости</p>
                </div>
            </div>
            <div class="col-xs-12 double_whats_happening_marker">
                <img src="img/igromania/icon-20.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение других форм<br />психологической зависимости</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -------------------------------------Double--------------------------------------- -->
<div class="double_whats_happening animated-block">
    <div class="container">
        <div class="row">
        <h2 class="text-center">Лечение игровой<br /><span class="double_whats_happening_h3">зависимости</span></h2>
            <div class="col-md-12">
                <p class="double_whats_happening_p_one">Игровая зависимость является психологической, поэтому и лечение<br />надо осуществлять психологическими методами.<br />
                    Наши специалисты осуществляют эффективное лечение<br />от ряда психологических зависимостей:</p>
            </div>
            <div class="col-xs-4 double_whats_happening_marker">
                <img src="img/igromania/icon-18.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от игровых автоматов</p>
                </div>
            </div>
            <div class="col-xs-4 double_whats_happening_marker">
                <img src="img/igromania/icon-19.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от казино</p>
                </div>
            </div>
            <div class="col-xs-4 double_whats_happening_marker">
                <img src="img/igromania/icon-20.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от компьютерных игр</p>
                </div>
            </div>
            <div class="col-xs-6 double_whats_happening_marker double_whats_happening_p_two_left">
                <img src="img/igromania/icon-21.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение<br />Интернет-зависимости</p>
                </div>
            </div>
            <div class="col-xs-6 double_whats_happening_marker">
                <img src="img/igromania/icon-22.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение других форм<br />психологической зависимости</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="mobile_whats_happening animated-block">
    <div class="container">
        <div class="row">
        <h2 class="text-center">Лечение игровой<br /><span class="double_whats_happening_h3">зависимости</span></h2>
            <div class="col-md-12">
                <p class="double_whats_happening_p_one">Игровая зависимость является психологической, поэтому и лечение<br />надо осуществлять психологическими методами.<br />
                    Наши специалисты осуществляют эффективное лечение<br />от ряда психологических зависимостей:</p>
            </div>
            <div class="col-xs-12 double_whats_happening_marker">
                <img src="img/igromania/icon-18.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от игровых автоматов</p>
                </div>
            </div>
            <div class="col-xs-12 double_whats_happening_marker">
                <img src="img/igromania/icon-19.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от казино</p>
                </div>
            </div>
            <div class="col-xs-12 double_whats_happening_marker">
                <img src="img/igromania/icon-20.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение зависимости<br />от компьютерных игр</p>
                </div>
            </div>
            <div class="col-xs-12 double_whats_happening_marker">
                <img src="img/igromania/icon-21.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение<br />Интернет-зависимости</p>
                </div>
            </div>
            <div class="col-xs-12 double_whats_happening_marker">
                <img src="img/igromania/icon-22.png" alt="" class="leftimg">
                <div class="double_whats_happening_padding">
                    <p class="double_whats_happening_p_two">Лечение других форм<br />психологической зависимости</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Контакты -->
<?= $this->render('_contacstMap'); ?>