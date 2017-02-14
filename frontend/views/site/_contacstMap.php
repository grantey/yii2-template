<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$script = <<< JS
    ymaps.ready(function() {
    	var myMap = new ymaps.Map("map", {
            center: [55.719145, 37.629897],
            zoom: 13,
            controls: ["fullscreenControl"]            
        });
        var placemark = new ymaps.Placemark([55.719145, 37.629897], {
    		balloonContent:'3-й Павловский переулок, дом 1, корп. 57, стр. 3, Офисный центр "М-стиль"'
		    }, {
				iconLayout: 'default#image',
				iconImageHref: 'img/ballon.png',
				iconImageSize: [44, 55],
				iconImageOffset: [-22, -55]
		});
		myMap.geoObjects.add(placemark);
    });
JS;
$this->registerJs($script, yii\web\View::POS_READY);

?>

<!-- Адрес -->
<div class="address animated-block">
    <div class="container">
        <div class="row">
            <h2 class="address_h2">Как нас найти ?</h2>
            <div class="col-sm-4">
                <img src="img/contact-icon1.png" alt="adress"><p><b>Адрес: </b> г. Москва, 3-й Павловский переулок, дом 1,корп. 57, стр. 3, Офисный центр "М-стиль"</p>
            </div>
            <div class="col-sm-4">
                <img src="img/contact-icon2.png" alt="phone"><p><a href="tel:+74952121808" class="address-phone"><span>+7 (495)</span> 212-18-08</a></p>
            </div>
            <div class="col-sm-4">
                <img src="img/contact-icon3.png" alt="email"><p><b>E-mail:</b> <a href="mailto:info@dovjenko-center.ru" class="address-email">info@dovjenko-center.ru</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Карта -->
<div class="container-fluid animated-block">
    <div id="map"></div>
</div>