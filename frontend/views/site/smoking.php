<?php

use frontend\assets\SmokingAsset;
use yii\helpers\Html;
use common\widgets\contacts\ContactFormWidget;

SmokingAsset::register($this);

/* @var $this yii\web\Alcohol */

$this->title = 'Как бросить курить?';

?>

<!-- Slider -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-xs-12">
                <p class="slider_one">Как<br class="footer_br" /> бросить</p>
                <p class="slider_two">курить<br class="footer_br" /> быстро ?</p>
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
                <p>Если курящий человек при пробуждении в первые 30 минут обязательно закурит сигарету, значит никотин уже накрепо вошел в обмен веществ его организма и поэтому самостоятельно человек человек избавиться 
                    от своей табачной зависимости без участия специалистов не сможет. Цель авторской методологии по отказу от курения - не просто бросить курить, но и не закурить в дальнейшем. Наш оздоровительный курс 
                    абсолютно безопасен и имеет стойкий положиельный результат. В отличие от других способов и приемов отказа от курения авторский экспрессивно-трансовый сеанс и "код Довженко" роводится в короткие сроки. Всего одно 
                    одно-два посещения специалист и вы навсегда избавитесь от своей пагубной привычки. Не откладывайте на потом - начните прямо сейчас !</p>
            </div>
        </div>
    </div>
</div>
<!-- Bg-1 -->
<div class="bg_one text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_one_h2">Всего <span class="bg_onecolor">три</span> шага до выздоровления:</h2>
            <div class="col-md-12 bg_one_bg">
                <img src="img/smoke/number/21.png">
            </div>
            <div class="col-xs-3">
                <p class="bg_one_p bg_one_p_one">Оставляете заявку<br />на нашем сайте</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_one_p bg_one_p_two">Мы свяжемся с Вами<br />и расскажем<br />о нашем методе</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_one_p bg_one_p_three">Посещение<br />оздоровительного<br />сеанса</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_one_p bg_one_p_four">Полный отказ<br />от курения!</p>
            </div>
        </div>
    </div>
</div>
<!-- PAD -->
<div class="bg_one_double text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_one_h2">Всего <span class="bg_two_color">три</span> шага до выздоровления:</h2>
            <div class="col-md-12 bg_one_bg">
                <img src="img/smoke/number/11.png" class="text-center">
            </div>
            <div class="col-xs-3">
                <p class="bg_one_p bg_one_p_one">Оставляете заявку<br />на нашем сайте</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_one_p bg_one_p_one">Мы свяжемся с Вами<br />и расскажем<br />о нашем методе</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_one_p bg_one_p_one">Посещение<br />оздоровительного<br />сеанса</p>
            </div>
            <div class="col-xs-3">
                <p class="bg_one_p bg_one_p_one">Полный отказ<br />от курения!</p>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="bg_one_mobile text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_one_h2">Всего <span class="bg_one_color">три</span> шага до выздоровления:</h2>
            <img src="img/smoke/icon-1.png">
            <p class="bg_one_mobile_p">Оставляете заявку<br />на нашем сайте</p>
            <img src="img/smoke/number/33.png">
            <p class="bg_one_mobile_p">Мы свяжемся с Вами<br />и расскажем<br />о нашем методе</p>
            <img src="img/smoke/number/32.png">
            <p class="bg_one_mobile_p">Посещение<br />оздоровительного<br />сеанса</p>
            <img src="img/smoke/number/31.png">
            <p class="bg_one_mobile_p">Полный отказ<br />от курения!</p>
        </div>
    </div>
</div>
<!-- Телефон -->
<div class="phone animated-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="phone_p_one">Бросить курить раз и навсегда ?</p>
                <p class="phone_p_one">Мы поможем!</p>
                <p class="phone_p_one">Позвоните нам прямо сейчас</p>
                <p class="phone_p_two"><?=Yii::$app->params['mainPhone']?></p>
                <p class="phone_p_three">(звонок по России бесплатный)</p>
            </div>
        </div>
    </div>
</div>
<!-- bg-3 -->
<div class="bg_three animated-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="img/smoke/icon-10.png" class="leftimg">
                <p>Вредоносные вещества табачного<br />дыма, попавшие через дыхательную<br />поверхность лёгких в кровеносное<br />русло, разносятся кровью по всему<br />
                организму за 21-23 секунды!</p>
                <br /><br /><br /><br />
                <img src="img/smoke/icon-10.png" class="leftimg">
                <p>Табак и табачный дым содержат<br />более 4 000 химических соединений,<br />60 из которых являются кацероген-<br />ными, то есть вызывают рост<br />раковой опухали</p>
                <br /><br /><br /><br />
                <img src="img/smoke/icon-10.png" class="leftimg">
                <p>Курение - основной фактор<br />развития хронической пневмонии,<br />бронхита, эмфиземы легких</p>
                <br /><br /><br /><br />
                <img src="img/smoke/icon-10.png" class="leftimg">
                <p>У курящей во время беременности<br />женщины ребёнок зачастую<br />рождается с врожденными<br />аномалиями сердца, мозга и лица</p>
            </div>
            <div class="col-md-4 text-center bg_three_center">
                <img src="img/smoke/icon-11.png">
            </div>
            <div class="col-md-4">
                <img src="img/smoke/icon-10.png" class="rightimg">
                <p class="bg_three_right">Курение способствует закупорива-<br />нию сосудов и артерий, вызывает<br />сердечные приступы и инсульт</p>
                <br /><br /><br /><br />
                <img src="img/smoke/icon-10.png" class="rightimg">
                <p class="bg_three_right">У курящих мужчин в 3 раза чаще<br />встречаются случаи импотенции по<br />сравнению с некурящими</p>
                <br /><br /><br /><br />
                <img src="img/smoke/icon-10.png" class="rightimg">
                <p class="bg_three_right">От пассивного курения ежегодно<br />умирает более 600 тыс. человек,<br />треть из которых дети</p>
                <br /><br /><br /><br />
                <img src="img/smoke/icon-10.png" class="rightimg">
                <p class="bg_three_right">В табачном дыме содержатся яды - <br />никотин, синильная кислота, угарный<br />газ, аммиак, смолы, бензпирен<br />(бензапирен), полоний-210 и другие<br />ядовитые вещества</p>
            </div>
        </div>
    </div>
</div>
<!-- Pad -->
<div class="bg_three_pad animated-block">
    <div class="container">
        <div class="row">
            <div class="bg_three_center_pad"><img src="img/smoke/icon-11.png"alt=""></div>
        </div>
        <div class="col-md-6 bg_three_pad_div">
            <div class="bg_three_left_padding"><img src="img/smoke/icon-10.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Вредоносные вещества табачного дыма, попавшие через<br />дыхательную поверхность лёгких в кровеносное русло, раз-<br />
            носятся кровью по всему организму за 21-23 секунды!</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/icon-10.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Табак и табачный дым содержат более 4 000 химических<br />соединений, 60 из которых являются кацерогенными,<br /> то есть вызывают рост раковой опухали</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/icon-10.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Курение - основной фактор развития<br />хронической пневмонии, бронхита, эмфиземы легких</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/icon-10.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">У курящей во время беременности женщины ребёнок<br />зачастую рождается с врожденными аномалиями сердца,<br />мозга и лица</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/icon-10.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Курение способствует закупориванию сосудов и артерий,<br />вызывает сердечные приступы и инсульт</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/icon-10.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">У курящих мужчин в 3 раза чаще встречаются случаи<br />импотенции по сравнению с некурящими</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/icon-10.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">От пассивного курения ежегодно умирает более<br />600 тыс. человек, треть из которых дети</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/icon-10.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">В табачном дыме содержатся яды - никотин, синильная<br />кислота, угарный газ, аммиак, смолы, бензпирен<br />(бензапирен), полоний-210 и другие ядовитые вещества</p></div>
        </div>
    </div>
</div>
<!-- Преимущества работы -->
<div class="work animated-steps1">
    <div class="container text-center animated-steps1-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества работы с нами:</h2>
            <div class="col-md-2 work_div animated-steps-item1 hidden-block delay-03s">
                <img src="img/smoke/icon-5.png" alt="">
                <p class="work_p">100% избавление<br />от табакозависимости</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item1 hidden-block delay-06s">
                <img src="img/smoke/icon-6.png" alt="">
                <p class="work_p">Надёжность<br />и долговечность<br />нашего метода</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item1 hidden-block delay-09s">
                <img src="img/smoke/icon-7.png" alt="">
                <p class="work_p">Полное избавление<br />от зависимости<br />уже после 1 сеанса</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item1 hidden-block delay-12s">
                <img src="img/smoke/icon-8.png" alt="">
                <p class="work_p">Безмедиканентозный<br />метод борьбы<br />с табакокурением</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item1 hidden-block delay-15s">
                <img src="img/smoke/icon-9.png" alt="">
                <p class="work_p">Без последствий<br />и побочных<br />эффектов</p>
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------------Double--------------------------------------- -->
<div class="work_double animated-steps1-mobile">
    <div class="container text-center animated-steps1-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества работы с нами:</h2>
            <div class="col-sm-4 animated-steps-item1 hidden-block delay-03s">
                <img src="img/smoke/icon-5.png" alt="">
                <p class="work_p">Полное<br />очищение</p>
            </div>
            <div class="col-sm-4 animated-steps-item1 hidden-block delay-06s">
                <img src="img/smoke/icon-6.png" alt="">
                <p class="work_p">Быстрый<br />результат</p>
            </div>
            <div class="col-sm-4 animated-steps-item1 hidden-block delay-09s">
                <img src="img/smoke/icon-7.png" alt="">
                <p class="work_p">Опытные<br />специалисты</p>
            </div>
        </div>
    </div>
    <div class="work_double_padding">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-6 animated-steps-item1 hidden-block delay-12s">
                    <img src="img/smoke/icon-8.png" alt="">
                    <p class="work_p">Уникальные<br />методы</p>
                </div>
                <div class="col-sm-6 animated-steps-item1 hidden-block delay-15s">
                    <img src="img/smoke/icon-9.png" alt="">
                    <p class="work_p">Полная анонимость<br />и конфиденциальность</p>
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
                <img src="img/smoke/kov-bg-3.png" alt="">
                <p class="dovjenko_p_one">Сейчас мне 45 лет, курил с 14 лет, т.е. почти 30 лет был заядлым курильщиком. Курил много, более пачки в день. Бросить курить пытался последние 15 лет, 
                ежедневно утром говоря себе: "Что сегодня я не курю", но только выйдя за дверь или садясь в машину прикуривал сигарету. Эта ситуация меня сильно раздражала, т.к. я понимал, что 
                сильно зависим от никотина. 21 декабря 2014 г. пришел на прием в Центр, скажу честно, пришёл от безвыходности и с небольшим доверием. Но спустя неделю после приема я понял что не 
                курю. Сейчас прошло почти 3 месяца и я веду здоровый образ жизни.</p>
                <p class="dovjenko_p_two">Евгений, 45 лет</p>
                <img src="img/smoke/icon-12.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Телефон -->
<div class="phone animated-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="phone_p_one">Бросить курить раз и навсегда ?</p>
                <p class="phone_p_one">Мы поможем!</p>
                <p class="phone_p_one">Позвоните нам прямо сейчас</p>
                <p class="phone_p_two"><?=Yii::$app->params['mainPhone']?></p>
                <p class="phone_p_three">(звонок по России бесплатный)</p>
            </div>
        </div>
    </div>
</div>
<!-- Что происходит, когда бросают курить ? -->
<div class="whats_happening animated-block">
    <div class="container">
        <div class="row">
            <h2 class="text-center"><span class="whats_happening_h2_one">Что происходит, когда</span><br /><span class="whats_happening_h2_two">Бросают Курить?</span></h2>
            <div class="whats_happening_padding">
                <div class="col-md-1 whats_happening_div whats_happening_div_one">
                    <p>Артериальное давление курильщика<br />снижается до нормального</p>
                    <img src="img/smoke/number/icon-13.png" alt="">
                </div>
                <div class="col-md-1 whats_happening_div whats_happening_div_two">
                    <img src="img/smoke/number/icon-14.png" alt="">
                    <p>Нормализуется содержание<br />кислорода в крови</p>
                </div>
                <div class="col-md-1 whats_happening_div whats_happening_div_three">
                    <p>Усиливается способность ощущать<br />вкус и запах</p>
                    <img src="img/smoke/number/icon-15.png" alt="">
                </div>
                <div class="col-md-1 whats_happening_div whats_happening_div_four">
                    <img src="img/smoke/number/icon-16.png" alt="">
                    <p>Улучшается цвет лица, исчезает<br />неприятный запах при выдохе</p>
                </div>
                <div class="col-md-1 whats_happening_div whats_happening_div_five">
                    <p>Становится легче дышать,<br />перестает беспокоить кашель<br />и одышка;<br />исчезает утомление и головная боль</p>
                    <img src="img/smoke/number/icon-17.png" alt="">
                </div>
                <div class="col-md-1 whats_happening_div whats_happening_div_six">
                    <img src="img/smoke/number/icon-18.png" alt="">
                    <p>Повышается общая работоспособность, сексуальная активность</p>
                </div>
                <div class="col-md-1 whats_happening_div whats_happening_div_seven">
                    <p>Улучшаются спортивные результаты: начинаете быстрее бегать, плавать, почувствуете желание физических нагрузок</p>
                    <img src="img/smoke/number/icon-19.png" alt="">
                </div>
                <div class="col-md-1 whats_happening_div whats_happening_div_eight">
                    <img src="img/smoke/number/icon-20.png" alt="">
                    <p>Риск развтия коронарной болезни сердца по сравнению с курильщиками снижается наполовину</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAD -->
<div class="whats_happening_pad animated-block">
    <div class="container">
        <h2 class="text-center"><span class="whats_happening_h2_one">Что происходит, когда</span><br /><span class="whats_happening_h2_two">Бросают Курить?</span></h2>
        <div class="col-sm-12 bg_three_pad_div">
            <div class="bg_three_left_padding"><img src="img/smoke/number/20m.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Артериальное давление курильщика<br />снижается до нормального</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/number/8ch.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Нормализуется содержание<br />кислорода в крови</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/number/2s.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Усиливается способность ощущать<br />вкус и запах</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/number/1n.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Улучшается цвет лица, исчезает<br />неприятный запах при выдохе</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/number/3n.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Становится легче дышать, перестает беспокоить кашель<br />и одышка; исчезает утомление и головная боль</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/number/1m.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Повышается общая работоспособность,<br />сексуальная активность</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/number/6m.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Улучшаются спортивные результаты: начинаете быстрее<br />бегать, плавать, почувствуете желание физических нагрузок</p></div>
            <div class="bg_three_left_padding"><img src="img/smoke/number/1g.png"alt="" class="bg_three_left"><p class="bg_three_p_pad">Риск развития коронарной болезни сердца по сравнению<br /> с курильщиками снижается наполовину</p></div>
        </div>
    </div>
</div>

<!-- Контакты -->
<?= $this->render('_contacstMap'); ?>