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

<!-- Карта -->
<div class="container-fluid animated-block">
    <div id="map"></div>
</div>