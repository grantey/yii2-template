<?php

use frontend\assets\AlcoholAsset;
use yii\helpers\Html;
use common\widgets\contacts\ContactFormWidget;

AlcoholAsset::register($this);

/* @var $this yii\web\Alcohol */

$this->title = 'Алкогольная зависимость';

?>

<!-- Slider -->
<div class="slider">
    <div class="container">
	<div class="row">
            <div class="col-sm-7 col-xs-12">
                <p class="slider_one">Бросить пить</p>
                <p class="slider_two">за один сеанс!</p>
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
<!-- Классический метод -->
<a id="alcohol-classic"></a>
<div class="classic_method animated-block">
    <div class="container">
        <h2 class="text-center">Классический метод А. Р. Довженко</h2>
        <p class="classic_method_p">Впервые терпин "кодирование" был введен в наркологию автором знаменитого метода по лечению алкогозилма Довженко А.Р., 
    Народным врачом СССР. Свой секрет исцеления от пристрастия к алкоголю он передал своим ученикам. В нашем Центре работают его ученики, в совершенстве владеющие 
    психотехнологией по Довженко. Сегодня, многие "кодировщики" не знакомые с истинным методом Довженко, используя свои приемы и способы, устраняют влечение 
    (тягу) к алкоголю, но лишь на время в отличие от истинного метода Довженко, который устраняет не только внешнее влечение к алкоголю, но и убирает "внутреннее" 
    желание человека к выпивке. В результате психолого-оздоровительного сеанса и постановки "кода" по Довженко человек уже не воздерживается от алкоголя, а 
    просто живет без него, не борется сам с собой, что дает нашему пациенту возможность свободно жить в социуме с его соблазнами и справляться с возникающими
    жизненными и личностными проблемами, не прибегая к алкоголю и курению.</p>
        <div class="col-md-6">
            <ul class="classic_method_one">
                <li class="classic_method_li"> На сеансе не используются вшивания, уколы, таблетки, вливания.<br />Методика абсолютно безопасна, без побочных эффектов!</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="classic_method_one">
                <li class="classic_method_li">Метод применяется в групповом и индивидуальном варианте</li>
            </ul>
        </div>
        <div class="col-md-12 classic_method_2">
            <ul class="classic_method_two">
                <li class="classic_method_li">Впервые в отечественной и мировой практике специалисты Центра разработаны и успешно реализуются метод Триада и Умеренное винопитие</li>
            </ul>
        </div>
    </div>
</div>
<!-- bg-1 -->
<div class="bg_one animated-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-6 text-center bg_one_border">
                <h3 class="bg_one_h3">Щадящий метод<br />&#171;Триада&#187;</h3>
                <img src="img/alc/icon-1.png">
                <p class="bg_one_p">Основной метод "Триада" является проведение медитативно-трансового сеанса с низкочастотным биоэнергетическим воздействием. После закрепления результатов клиенту проводятся поддерживающие мероприятия.</p>
                <br />
                <?= Html::a('Подробнее о методе...', Yii::$app->request->baseUrl."/alcohol-triad", ['class' => 't']) ?>
            </div>
            <div class="col-md-6 col-xs-6 text-center">
                <h3 class="bg_one_h3">Умеренное<br />винопитие</h3>
                <img src="img/alc/icon-2.png">
                <p class="bg_one_p">Методика "этаноловой программы" направлена на огранические и томржение "вторичного влечения" к алкоголю, что в итоге позволяет человеку контролировать собственное винопитие и перейти к дозированному, умеренному потреблению алкогольных напитков</p>
                <?= Html::a('Подробнее о методе...', Yii::$app->request->baseUrl."/alcohol-reasonable", ['class' => 't']) ?>
            </div>
        </div>
    </div>
</div>
<!-- Double -->
<div class="bg_one_double animated-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center bg_one_border">
                <h3 class="bg_one_h3">Щадящий метод<br />&#171;Триада&#187;</h3>
                <img src="img/alc/icon-1.png">
                <p class="bg_one_p">Основной метод "Триада" является проведение медитативно-трансового сеанса с низкочастотным биоэнергетическим воздействием. После закрепления результатов клиенту проводятся поддерживающие мероприятия.</p>
                <br />
                <?= Html::a('Подробнее о методе...', Yii::$app->request->baseUrl."/alcohol-triad", ['class' => 't']) ?>
            </div>
            <div class="col-md-6 text-center">
                <h3 class="bg_one_h3">Умеренное<br />винопитие</h3>
                <img src="img/alc/icon-2.png">
                <p class="bg_one_p">Методика "этаноловой программы" направлена на огранические и томржение "вторичного влечения" к алкоголю, что в итоге позволяет человеку контролировать собственное винопитие и перейти к дозированному, умеренному потреблению алкогольных напитков</p>
                <?= Html::a('Подробнее о методе...', Yii::$app->request->baseUrl."/alcohol-reasonable", ['class' => 't']) ?>
            </div>
        </div>
    </div>
</div>
<!-- Необходимые условия -->
<div class="neo_usl animated-steps1">
    <div class="container animated-steps1-box hidden-block">
        <div class="row">
            <h3 class="text-center neo_usl_h3">Необходимые условия для успешного избавления<br />от алкогольной зависимости:</h3>
            <div class="col-xs-4 text-center animated-steps-item1 hidden-block delay-03s">
                <img src="img/alc/icon-3.png">
                <p class="neo_usl_p">Искреннее и осознанное<br />желание покончить с вредной<br />и пагубной привычкой</p>
            </div>
            <div class="col-xs-4 text-center animated-steps-item1 hidden-block delay-06s">
                <img src="img/alc/icon-3.png">
                <p class="neo_usl_p">Строгое трех дневное<br />воздержание от любых<br />алкогольсодержащих<br />жидкостей</p>
            </div>
            <div class="col-xs-4 text-center animated-steps-item1 hidden-block delay-09s">
                <img src="img/alc/icon-3.png">
                <p class="neo_usl_p">В ночь перед кодированием<br />не принимать седативных,<br />снотворных и других<br />успокаивающих препаратов</p>
            </div>
        </div>
    </div>
</div>
<!-- Double -->
<div class="neo_usl_double animated-steps1-mobile">
    <div class="container animated-steps1-box hidden-block">
        <div class="row">
            <h3 class="text-center neo_usl_h3">Необходимые условия для успешного избавления<br />от алкогольной зависимости:</h3>
            <div class="col-md-4 text-center animated-steps-item1 hidden-block delay-03s">
                <img src="img/alc/icon-3.png">
                <p class="neo_usl_p">Искреннее и осознанное<br />желание покончить с вредной<br />и пагубной привычкой</p>
            </div>
            <div class="col-md-4 text-center animated-steps-item1 hidden-block delay-03s">
                <img src="img/alc/icon-3.png">
                <p class="neo_usl_p">Строгое трех дневное<br />воздержание от любых<br />алкогольсодержащих<br />жидкостей</p>
            </div>
            <div class="col-md-4 text-center animated-steps-item1 hidden-block delay-03s">
                <img src="img/alc/icon-3.png">
                <p class="neo_usl_p">В ночь перед кодированием<br />не принимать седативных,<br />снотворных и других<br />успокаивающих препаратов</p>
            </div>
        </div>
    </div>
</div>
<!-- Bg-2 -->
<div class="bg_two text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_two_h2">Всего <span class="bg_two_color">три</span> шага до выздоровления:</h2>
            <div class="col-md-12 bg_one_bg">
                <img src="img/alc/21.png">
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
                <p class="bg_two_p bg_two_p_four">Полный отказ<br />от алкоголя</p>
            </div>
        </div>
    </div>
</div>
<!-- PAD -->
<div class="bg_two_double text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_two_h2">Всего <span class="bg_two_color">три</span> шага до выздоровления:</h2>
            <div class="col-md-12 bg_one_bg">
                <img src="img/alc/11.png" class="text-center">
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
                <p class="bg_two_p bg_two_p_four">Полный отказ<br />от алкоголя</p>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="bg_two_mobile text-center animated-block">
    <div class="container">
        <div class="row">
            <h2 class="bg_two_h2">Всего <span class="bg_two_color">три</span> шага до выздоровления:</h2>
            <img src="img/alc/icon-4.png">
            <p class="bg_two_mobile_p">Оставляете заявку<br />на нашем сайте</p>
            <img src="img/alc/33.png">
            <p class="bg_two_mobile_p">Мы свяжемся с Вами<br />и расскажем<br />о нашем методе</p>
            <img src="img/alc/32.png">
            <p class="bg_two_mobile_p">Посещение<br />оздоровительного<br />сеанса</p>
            <img src="img/alc/31.png">
            <p class="bg_two_mobile_p">Полный отказ<br />от алкоголя!</p>
        </div>
    </div>
</div>
<!-- Телефон -->
<?= $this->render('_contactsPhone');?>
<hr />
<!-- Специалисты -->
<?= $this->render('_specialistSlider'); ?>

<!-- Довженко -->
<div class="dovjenko animated-block">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <img src="img/alc/kov-bg-3.png" alt="">
                <p class="dovjenko_p_one">Психотерапевтическое вмешательство должно предусматривать глубокую психологическую<br />перестройку пациента, чтобы он возненавидел своё пьянство, проникся твёрдым желанием<br />жить абсолютно трезвым, чувствовать в себе силы в любой момент, даже в самый "чёрный"<br />и тяжёлый в его жизни, дать отпор "соблазнителям".</p>
                <p class="dovjenko_p_two">Александр Романович Довженко</p>
                <img src="img/alc/icon-8.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Преимущества работы -->
<div class="work animated-steps2">
    <div class="container text-center animated-steps2-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества работы с нами:</h2>
            <div class="col-md-2 work_div animated-steps-item2 hidden-block delay-03s">
                <img src="img/alc/icon-9.png" alt="">
                <p class="work_p">Полное<br />очищение</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item2 hidden-block delay-06s">
                <img src="img/alc/icon-10.png" alt="">
                <p class="work_p">Быстрый<br />результат</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item2 hidden-block delay-09s">
                <img src="img/alc/icon-11.png" alt="">
                <p class="work_p">Опытные<br />специалисты</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item2 hidden-block delay-12s">
                <img src="img/alc/icon-12.png" alt="">
                <p class="work_p">Уникальные<br />методы</p>
            </div>
            <div class="col-md-2 work_div animated-steps-item2 hidden-block delay-15s">
                <img src="img/alc/icon-13.png" alt="">
                <p class="work_p">Полная анонимость<br />и конфиденциальность</p>
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------------Double--------------------------------------- -->
<div class="work_double animated-steps2-pad">
    <div class="container text-center animated-steps2-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества работы с нами:</h2>
            <div class="col-xs-4 animated-steps-item2 hidden-block delay-03s">
                <img src="img/alc/icon-9.png" alt="">
                <p class="work_p">Полное<br />очищение</p>
            </div>
            <div class="col-xs-4 animated-steps-item2 hidden-block delay-06s">
                <img src="img/alc/icon-10.png" alt="">
                <p class="work_p">Быстрый<br />результат</p>
            </div>
            <div class="col-xs-4 animated-steps-item2 hidden-block delay-09s">
                <img src="img/alc/icon-11.png" alt="">
                <p class="work_p">Опытные<br />специалисты</p>
            </div>
        </div>
    </div>
    <div class="work_double_padding">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-6 animated-steps-item2 hidden-block delay-12s">
                    <img src="img/alc/icon-12.png" alt="">
                    <p class="work_p">Уникальные<br />методы</p>
                </div>
                <div class="col-xs-6 animated-steps-item2 hidden-block delay-15s">
                    <img src="img/alc/icon-13.png" alt="">
                    <p class="work_p">Полная анонимость<br />и конфиденциальность</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="work_mobile animated-steps2-mobile">
    <div class="container text-center animated-steps2-box hidden-block">
        <div class="row">
            <h2 class="work_h2">Преимущества работы с нами:</h2>
            <div class="col-md-12">
                <div class="animated-steps-item2 hidden-block delay-03s">
                    <img src="img/alc/icon-9.png" alt="">
                    <p class="work_mobile_p">Полное<br />очищение</p>
                </div>
                <div class="animated-steps-item2 hidden-block delay-06s">
                    <img src="img/alc/icon-10.png" alt="">
                    <p class="work_mobile_p">Быстрый<br />результат</p>
                </div>
                <div class="animated-steps-item2 hidden-block delay-09s">
                    <img src="img/alc/icon-10.png" alt="">
                    <p class="work_mobile_p">Опытные<br />специалисты</p>
                </div>
                <div class="animated-steps-item2 hidden-block delay-12s">
                    <img src="img/alc/icon-10.png" alt="">
                    <p class="work_mobile_p">Уникальные<br />методы</p>
                </div>
                <div class="animated-steps-item2 hidden-block delay-15s">
                    <img src="img/alc/icon-10.png" alt="">
                    <p class="work_mobile_p">Полная анонимость<br />и конфиденциальность</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr />
<!-- Телефон -->
<?= $this->render('_contactsPhone');?>
<!-- bg-3 -->
<!-- PC -->
<div class="bg_three animated-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="bg_three_right"><p class="bg_three_p"><span class="bg_three_b">Ваше здоровье</span><br />и самочувствие<br />улучшатся в разы.</p><img src="img/alc/icon-14.png" width="80" height="80" alt=""></div>
                <div class="bg_three_right"><p class="bg_three_p"><span class="bg_three_b">Вы будете энергичны</span><br />и активны, Ваш ум теперь<br />ясный и трезвый.</p><img src="img/alc/icon-15.png" width="80" height="80" alt=""></div>
                <div class="bg_three_right"><p><span class="bg_three_b">Вы свободны от зависимости!</span><br />Алкоголь больше не разрушает<br />Вашу жизнь, не угрожает здоровью<br />Вас и Ваших детей. Вы можете<br />вздохнуть полной грудью<br />и раловаться жизни без алкоголя.</p><img src="img/alc/icon-16.png" width="80" height="80" alt=""></div>
            </div>
            <div class="col-md-4">
                <div class="bg_three_center"><img src="img/alc/icon-20.png"alt=""></div>
            </div>
            <div class="col-md-4">
                <div class="bg_three_left"><img src="img/alc/icon-17.png" width="80" height="80" alt=""><p><span class="bg_three_b">Ваши дети теперь</span><br />вне зоны риска, и у них<br />перед глазами достойный<br />пример.</p></div>
                <div class="bg_three_left"><img src="img/alc/icon-18.png" width="80" height="80" alt=""><p class="bg_three_p"><span class="bg_three_b">Отношения с близкими</span><br />станут гораздо лучше,<br />уйдут конфликты.</p></div>
                <div class="bg_three_left"><img src="img/alc/icon-19.png" width="80" height="80" alt=""><p class="bg_three_p"><span class="bg_three_b">Садиться за руль</span><br />теперь можно<br />в любой момент.</p></div>
            </div>
        </div>
    </div>
</div>
<!-- PAD -->
<div class="bg_three_pad animated-block">
    <div class="container">
	<div class="row">
            <div class="bg_three_center_pad"><img src="img/alc/icon-20.png"alt=""></div>
	</div>
	<div class="col-md-6 bg_three_pad_md">
            <div class="bg_three_left"><img src="img/alc/icon-14.png"alt=""><p class="bg_three_p_pad"><span class="bg_three_b">Ваше здоровье</span><br />и самочувствие улучшатся в разы.</p></div>
            <div class="bg_three_left"><img src="img/alc/icon-15.png"alt=""><p class="bg_three_p_pad"><span class="bg_three_b">Вы будете энергичны</span><br />и активны, Ваш ум теперь ясный и трезвый.</p></div>
            <div class="bg_three_left"><img src="img/alc/icon-16.png"alt=""><p class="bg_three_p"><span class="bg_three_b">Вы свободны от зависимости!</span><br />Алкоголь больше не разрушает Вашу жизнь,<br />не угрожает здоровью Вас и Ваших детей. Вы можете<br />вздохнуть полной грудью и радоваться жизни<br />без алкоголя.</p></div>
            <div class="bg_three_left"><img src="img/alc/icon-17.png"alt=""><p class="bg_three_p_pad"><span class="bg_three_b">Ваши дети теперь</span><br />вне зоны риска, и у них перед глазами<br />достойный пример.</p></div>
            <div class="bg_three_left"><img src="img/alc/icon-18.png"alt=""><p class="bg_three_p_pad"><span class="bg_three_b">Отношения с близкими</span><br />станут гораздо лучше, уйдут конфликты.</p></div>
            <div class="bg_three_left"><img src="img/alc/icon-19.png"alt=""><p class="bg_three_p_pad"><span class="bg_three_b">Садиться за руль</span><br />теперь можно в любой момент.</p></div>
	</div>
    </div>
</div>
<!-- Mobile -->
<div class="bg_three_mobile text-center animated-block">
    <div class="container">
	<div class="row">
            <div class="bg_three_mobile_padding"><img src="img/alc/icon-20.png"alt=""></div>
            <div class="bg_three_mobile_padding_two"><img src="img/alc/icon-14.png"alt=""><p class="bg_three_mobile_padding_p"><span class="bg_three_b">Ваше здоровье</span><br />и самочувствие улучшатся в разы.</p></div>
            <img src="img/alc/icon-15.png"alt=""><p class="bg_three_mobile_padding_p"><span class="bg_three_b">Вы будете энергичны</span><br />и активны, Ваш ум теперь ясный и трезвый.</p>
            <div class="bg_three_mobile_padding_two"><img src="img/alc/icon-16.png"alt=""><p class="bg_three_mobile_padding_p"><span class="bg_three_b">Вы свободны от зависимости!</span><br />Алкоголь больше не разрушает Вашу жизнь,<br />не угрожает здоровью Вас и Ваших детей. Вы можете<br />вздохнуть полной грудью и радоваться жизни<br />без алкоголя.</p></div>
            <img src="img/alc/icon-17.png"alt=""><p class="bg_three_mobile_padding_p"><span class="bg_three_b">Ваши дети теперь</span><br />вне зоны риска, и у них перед глазами<br />достойный пример.</p>
            <div class="bg_three_mobile_padding_two"><img src="img/alc/icon-18.png"alt=""><p class="bg_three_mobile_padding_p"><span class="bg_three_b">Отношения с близкими</span><br />станут гораздо лучше, уйдут конфликты.</p></div>
            <img src="img/alc/icon-19.png"alt=""><p class="bg_three_mobile_padding_p"><span class="bg_three_b">Садиться за руль</span><br />теперь можно в любой момент.</p>
	</div>
    </div>
</div>

<!-- Контакты -->
<?= $this->render('_contacstMap'); ?>