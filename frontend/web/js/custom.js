/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).on('ready pjax:success', function() {
    $('.modal-btn').on('click', function() {
        $('#modal').modal('show')
            .find('#modal-content')            
            .load($(this).attr('data-target'));    
    });
});
    
$(document).ready(function() {   
    
    $('li#site-map, div.popup-menu').hover(function() {
        $('div.popup-menu').addClass('in');
    }, function () {
        $('div.popup-menu').removeClass('in'); 
    });    
    
    $('div.close-popup-menu').click(function() {
        $('div.popup-menu').removeClass('in');
    });
    
    contentEffect();
});

function contentEffect() {
    if ($('.animated-block').length) {
    	$('.animated-block').addClass('hidden-block').viewportChecker({
            classToAdd: 'visible-block animated-15s fadeInEffect',            
            offset: 100
        });
    }
   
    if ($('.animated-steps1').length) {
        $('.animated-steps1').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps1 .animated-steps1-box, .animated-steps1 .animated-steps-item1').addClass('visible-block animated-06s zoomIn');
            }
        });
    }
    
    if ($('.animated-steps2').length) {
        $('.animated-steps2').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps2 .animated-steps2-box, .animated-steps2 .animated-steps-item2').addClass('visible-block animated-06s zoomIn');
            }
        });
    }
    
    if ($('.animated-steps3').length) {
        $('.animated-steps3').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps3 .animated-steps3-box, .animated-steps3 .animated-steps-item3').addClass('visible-block animated-06s zoomIn');
            }
        });
    }
    
    if ($('.animated-steps1-mobile').length) {
        $('.animated-steps1-mobile').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps1-mobile .animated-steps1-box, .animated-steps1-mobile .animated-steps-item1').addClass('visible-block animated-06s zoomIn');
            }
        });
    }
    
    if ($('.animated-steps2-mobile').length) {
        $('.animated-steps2-mobile').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps2-mobile .animated-steps2-box, .animated-steps2-mobile .animated-steps-item2').addClass('visible-block animated-06s zoomIn');
            }
        });
    }
    
    if ($('.animated-steps3-mobile').length) {
        $('.animated-steps3-mobile').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps3-mobile .animated-steps3-box, .animated-steps3-mobile .animated-steps-item3').addClass('visible-block animated-06s zoomIn');
            }
        });
    }
    
    if ($('.animated-steps1-pad').length) {
        $('.animated-steps1-pad').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps1-pad .animated-steps1-box, .animated-steps1-pad .animated-steps-item1').addClass('visible-block animated-06s zoomIn');
            }
        });
    }
    
    if ($('.animated-steps2-pad').length) {
        $('.animated-steps2-pad').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps2-pad .animated-steps2-box, .animated-steps2-pad .animated-steps-item2').addClass('visible-block animated-06s zoomIn');
            }
        });
    }
    
    if ($('.animated-steps3-pad').length) {
        $('.animated-steps3-pad').viewportChecker({
            classToAdd: 'visible-block',
            offset: 100,
            callbackFunction: function(elem, action){
                $('.animated-steps3-pad .animated-steps3-box, .animated-steps3-pad .animated-steps-item3').addClass('visible-block animated-06s zoomIn');
            }
        });
    } 
}