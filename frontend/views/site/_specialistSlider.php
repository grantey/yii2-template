<?php

use yii\helpers\Html;
/**
 * 
 * required 'css/owl.carousel.min.css',
 * required 'js/owl.carousel.min.js',
 * 
 */

$script = <<< JS
    $('.owl-carousel').owlCarousel({
        margin: 10,
        loop: true,
        nav:true,
        //autoplay:true,
        autoplayTimeout:10000,
        navText:{},
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
JS;
$this->registerJs($script, yii\web\View::POS_READY);

?>

<div class="home-demo animated-block">
    <div class="container">
        <div class="row">
            <div class="large-12 columns">
                <h3>Наши специалисты:</h3>
                <div class="owl-carousel text-center">
                    <div class="item">
                        <div class="spec-photo spec-photo1"></div>
                        <h5 class="home-demo_h5">Чиши<br />Юрий Александрович</h5>
                        <p class="home-demo_p">Врач психоневролог, психотерапевт, психофизиолог, сертифицированный мастер НЛП вот уже более 35 лет занимается врачебной деятельностью, несет людям радость выздоровления, избавления от алкогольной и никотиновой зависимости. С отличием закончил Свердловский Государственный медицинский институт по специалисти "Лечебное дело, психоневрология".</p>
                        <p class="specialist_p_one"><?= Html::a('Подробнее...', Yii::$app->request->baseUrl."/specialists#spec1", ['target' => '_blank']); ?></p>
                    </div>
                    <div class="item">
                        <div class="spec-photo spec-photo2"></div>
                        <h5 class="home-demo_h5">Новиков<br />Олег Васильевич</h5>
                        <p class="home-demo_p">Врач нарколог, психотерапевт, гипнолог, вот уже более 30 лет занимается врачебной деятельностью, избавивший тысячи людей от алкогольной и никотиновой зависимости, перенял все секреты и развил метод А.Р.Довженко. Является членом Исполкома Международной Лиги трезвости и здоровья, а также член Проблемной комиссии по табакокурению Академии медицинских наук<br />Российской Федерации.</p>
                        <p class="specialist_p_two"><?= Html::a('Подробнее...', Yii::$app->request->baseUrl."/specialists#spec2", ['target' => '_blank']); ?></p>
                    </div>
                    <div class="item">
                        <div class="spec-photo spec-photo3"></div>
                        <h5 class="home-demo_h5">Гордеев<br />Михаил Николаевич</h5>
                        <p class="home-demo_p">Психотерапевт, профессор, доктор медицинских наук, кандидат психологических наук. Сертифицирован Парижским институтом Милтона Эриксона. Имеет международную квалификацию НЛП-тренер. В 1986г. окончил 2-ой Московский орден Ленина государственный медицинский инстиут им. Н.И.Пирогова (2-ой МОЛГМИ), лечебный<br />факультет, врач-лечебник.</p>
                        <p class="specialist_p_three"><?= Html::a('Подробнее...', Yii::$app->request->baseUrl."/specialists#spec3", ['target' => '_blank']); ?></p>
                    </div>
                    <div class="item">
                        <div class="spec-photo spec-photo4"></div>
                        <h5 class="home-demo_h5">Андреев<br />Владимир Александрович</h5>
                        <p class="home-demo_p">Ученик А.Р.Довженко с 1985г., Академик Международной Академии Трезвости, академик МА Бионатуропатии и Информациологии, лауреат премии Фонда А.Р.Довженко, награждён золотой медалью академика Ф.Г.Углова, почётный член школы А.Р.Довженко Международного института Резервных Возможностей Человека Санкт-Петербурга, врач-нарколог высшей категории, психотерапевт, сексопатолог.</p>
                        <p class="specialist_p_four"><?= Html::a('Подробнее...', Yii::$app->request->baseUrl."/specialists#spec4", ['target' => '_blank']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>