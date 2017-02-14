<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\contacts\ContactFormWidget;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <?php $this->head() ?>   
    
</head>
<body>
<?php $this->beginBody() ?>
    
<?= ContactFormWidget::widget([    
    'header' => 'Заявка на обратный звонок',                
    'fields' => ['name', 'phone', 'email', 'text'],
    'modal' => true,
    'modalOptions' => [
        'id' => 'callback',
        'size' => 'modal-md',
        'modalLink' => false,
        'modalTag' => 'a',
        'modalLabel' => 'Заказать обратный звонок',
        'modalLabelClass' => 'open-modal-1'
    ],
    'formOptions' => [
        'id' => 'callback-form',
        'class' => 'form-horizontal',
        'buttonText' => 'Отправить',
    ]
]); ?>    

<div class="header">
    <div class="container text-center">
        <div class="col-xs-12 col-xs-6 col-md-6 col-lg-4">
            <a href="<?=Yii::$app->request->baseUrl?>"><img class="logo" src="img/header.png" alt="logotip" /></a>
        </div>
        <div class="col-lg-4 header_two">
            <p><sup><img src="img/kov-1.png"></sup><i>...Поверьте в себя,<br /> доверьтесь мне<br /> и я верну Вас к жизни <sub><img src="img/kov-2.png"></sub></i><br /><b>А.Р.Довженко</b></p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-4 header_three">
            <div class="glyphicon">
                <img src="img/mark_kont.png" class="header_three_size_img"><span class="header_three_size"><?= Html::a('Контакты', Yii::$app->request->baseUrl."/contacts") ?></span>
            </div>            
            <a class="open-modal-1" data-toggle="modal" data-target="#callback">Заказать обратный звонок</a>
            <p><a href="tel:+74952121808"><span class="telefon_one">+7 (495)</span> <span class="telefon_two">212-18-08</span></a><br /><span class="header_three_size">Москва, 3-й Павловский переулок,<br />дом 1, кв.57, стр.3.</span></p>
        </div>
    </div>
</div>
    
<div class="container-fluid menu_main">
    <div class="container">
        <div class="row">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Развернуть меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li id="site-map"><?= Html::a('<div class="open-popup-menu"><span></span><span></span><span></span></div>Весь сайт', Yii::$app->request->baseUrl) ?></li>
                        <li><?= Html::a('Алкогольная завосимость', Yii::$app->request->baseUrl."/alcohol") ?></li>
                        <li><?= Html::a('Курение', Yii::$app->request->baseUrl."/smoking") ?></li>
                        <li><?= Html::a('Коррекция веса', Yii::$app->request->baseUrl."/fulness") ?></li>
                        <li><?= Html::a('Игромания', Yii::$app->request->baseUrl."/gaming") ?></li>
                        <li><?= Html::a('Родственникам', Yii::$app->request->baseUrl."/relatives") ?></li>
                    </ul>
                </div>
            </div>
	</div>
    </div>
    <div class="popup-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 double_menu_padding">
                    <div class="double_menu_padding_div"><?= Html::a('О центре', Yii::$app->request->baseUrl."/about") ?></div>
                    <div class="double_menu_padding_black"><?= Html::a('Специалисты центра', Yii::$app->request->baseUrl."/specialists") ?></div>
                    <div class="double_menu_padding_black"><?= Html::a('Обучение', Yii::$app->request->baseUrl."/training") ?></div>
                    <div class="double_menu_padding_black"><?= Html::a('Новости', Yii::$app->request->baseUrl."/news") ?></div>
                    <div class="double_menu_padding_black"><?= Html::a('Наши публикации', Yii::$app->request->baseUrl."/publication") ?></div>
                </div>
                <div class="col-sm-3 double_menu_padding">
                    <div class="double_menu_padding_div"><?= Html::a('Алкогольная<br />завосимость', Yii::$app->request->baseUrl."/alcohol") ?></div>
                    <div class="double_menu_padding_black"><?= Html::a('Классический метод', Yii::$app->request->baseUrl."/alcohol#alcohol-classic") ?></div>
                    <div class="double_menu_padding_black"><?= Html::a('Щадящий метод Триада', Yii::$app->request->baseUrl."/alcohol-triad") ?></div>
                    <div class="double_menu_padding_black"><?= Html::a('Умеренное винопитие', Yii::$app->request->baseUrl."/alcohol-reasonable") ?></div>
                </div>
                <div class="col-sm-3 double_menu_padding">
                    <div class="double_menu_padding_div"><?= Html::a('Курение', Yii::$app->request->baseUrl."/smoking") ?></div>
                    <div class="double_menu_padding_div"><?= Html::a('Коррекция веса', Yii::$app->request->baseUrl."/fulness") ?></div>
                    <div class="double_menu_padding_div"><?= Html::a('Игромания', Yii::$app->request->baseUrl."/gaming") ?></div>
                    <div class="double_menu_padding_div"><?= Html::a('Родственникам', Yii::$app->request->baseUrl."/relatives") ?></div>
                </div>
                <div class="col-sm-3 double_menu_padding">
                    <div class="double_menu_padding_div"><?= Html::a('Отзывы', Yii::$app->request->baseUrl."/comments") ?></div>
                    <div class="double_menu_padding_div"><?= Html::a('Контакты', Yii::$app->request->baseUrl."/contacts") ?></div>
                </div>
            </div>
            <div class="close-popup-menu">×</div>
        </div>
    </div>
</div>
    
</div>
    
<?= $content ?>

<div class="footer">
    <div class="container footer_c">
	<div class="row">
            <div class="col-sm-6 col-md-4">
		<div class="footer_2">
                    <p class="footer_p">Позвоните нам прямо сейчас</p>
                    <p class="footer_tel"><a href="tel:+74952121808">+7 (495) 212-18-08</a></p>
                    <p class="footer_small">                        
                        <div data-toggle="modal" data-target="#callback"><span class="text-center open_modal_footer open-modal-1_footer">Заказать обратный звонок</span></div>
                    </p>
                    <p class="footer_p">Мы находимся по адресу:</p>
                    <p class="footer_small">Москва, ст. м. Серпуховская,<br /> 3-й Павловский переулок, дом 1, <br />корп. 57, стр. 3,<br /> Офисный центр "М-стиль"<br /><br /></p>
                    <p class="footer_small"><p class="footer_small glyphicon glyphicon-map-marker"></p><?= Html::a('Схема проезда', Yii::$app->request->baseUrl."/contacts", ['class' => 'footer_hr open-modal-1_footer']) ?></p>
		</div>
            </div>
            <div class="pad_footer">
		<div class="col-md-6">
                    <div class="footer_2">
                        <div class="footer_hr"><?= Html::a('Алкогольная завосимость', Yii::$app->request->baseUrl."/alcohol", ['class' => 'footer_hr']) ?><br /></div>
                        <div class="footer_hr"><?= Html::a('Курение', Yii::$app->request->baseUrl."/smoking", ['class' => 'footer_hr']) ?><br /></div>
                        <div class="footer_hr"><?= Html::a('Коррекция веса', Yii::$app->request->baseUrl."/fulness", ['class' => 'footer_hr']) ?><br /></div>
                        <div class="footer_hr"><?= Html::a('Игромания', Yii::$app->request->baseUrl."/gaming", ['class' => 'footer_hr']) ?><br /></div>
                        <div class="footer_hr"><?= Html::a('Родственникам', Yii::$app->request->baseUrl."/relatives", ['class' => 'footer_hr']) ?></div>
                    </div>
		</div>
		<div class="col-md-6">
                    <div class="footer_2">
                        <div class="footer_hr"><?= Html::a('О центре', Yii::$app->request->baseUrl."/about", ['class' => 'footer_hr']) ?><br /></div>
                        <div class="footer_l"><?= Html::a('Специалисты центра', Yii::$app->request->baseUrl."/specialists", ['class' => 'footer_l']) ?><br /></div>
                        <div class="footer_l"><?= Html::a('Обучение', Yii::$app->request->baseUrl."/training", ['class' => 'footer_l']) ?><br /></div>
                        <div class="footer_l"><?= Html::a('Новости', Yii::$app->request->baseUrl."/news", ['class' => 'footer_l']) ?><br /></div>
                        <div class="footer_l"><?= Html::a('Наши публикации', Yii::$app->request->baseUrl."/publication", ['class' => 'footer_l']) ?></div>
                    </div>
		</div>
            </div>
            <div class="col-sm-6 col-md-3">
		<div class="footer_2">
                    <p class="footer_2_2">&#169; <?= date("Y") ?> "Московский центр имени<br class="phone_br" /> А.Р.Довженко"</p>
                    <p class="rafinda-logo">Разработка — <a href="http://ra-finansda.ru/" target="_blank"><img src="img/finda-logo.png" alt=""></a></p>
		</div>
            </div>
	</div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
