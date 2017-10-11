function closePreloader() {
    $('#preloader').fadeOut('fast'); // will fade out the white DIV that covers the website.
    $('#preloader .inner').fadeOut(); // will first fade out the loading animation    
}

setTimeout(closePreloader, 100);

$(window).load(function() {
    "use strict";
    //------------------------------------------------------------------------
    //                      PRELOADER SCRIPT
    //------------------------------------------------------------------------
	$.ajax({
		type: "GET",
		url: "/bitrix/templates/af/js/init.js",
		dataType: "script",
		cache: true
	});
});
$(document).ready(function($) {
	// $('#preloader').fadeOut('fast'); // will fade out the white DIV that covers the website.
 //    $('#preloader .inner').fadeOut(); // will first fade out the loading animation
    if(!Modernizr.svg) {
        var images = $('img[data-png-fallback]');
        images.each(function(i) {
            $(this).attr('src', $(this).data('png-fallback'));
        });
    };
    $('.bxslider').bxSlider({
        auto: true
    });
    $('.bxslider-fader').bxSlider({
        controls: false,
        pager: false,
        mode: 'fade',
        auto: true
    });
    $('.readmore').click(function(event) {
        $(this).toggleClass('open-btn');
        if ($(this).hasClass('open-btn')) {
            $(this).text('Скрыть');
        } else {
            $(this).text('Подробнее');
        };
        $('.cut').slideToggle();
    });
    $(".form-fancybox").fancybox({
        wrapCSS: 'form-fancybox-modal',
        padding: 0
    });
    $(".video-fancybox").fancybox({
        wrapCSS: 'video-fancybox-modal',
        padding: 40,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
    var aTimes = [
            '09:00', '10:00', '11:00', '12:00', '13:00', '14:00',
            '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'
        ];
    $('input[name="date"]').datetimepicker({allowTimes: aTimes});
    $('input[name="date"]').mask("9999/99/99 99:99");////
    $('form[name="SIMPLE_FORM_4"] input[name="form_text_14"]').datetimepicker({allowTimes: aTimes});
    $('form[name="SIMPLE_FORM_4"] input[name="form_text_14"]').mask("9999/99/99 99:99");////
    $('form[name="SIMPLE_FORM_6"] input[name="form_text_27"]').datetimepicker({allowTimes: aTimes});
    $('form[name="SIMPLE_FORM_6"] input[name="form_text_27"]').mask("9999/99/99 99:99");////
    $('form[name="SIMPLE_FORM_10"] input[name="form_text_46"]').datetimepicker({allowTimes: aTimes});
    $('form[name="SIMPLE_FORM_10"] input[name="form_text_46"]').mask("9999/99/99 99:99");////
    $('form[name="SIMPLE_FORM_11"] input[name="form_text_52"]').datetimepicker({allowTimes: aTimes});
    $('form[name="SIMPLE_FORM_11"] input[name="form_text_52"]').mask("9999/99/99 99:99");////
    // 
    $('input[name="phone"]').mask("+7 (999) 999-99-99");
    $('form[name="SIMPLE_FORM_2"] input[name="form_text_5"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_4"] input[name="form_text_11"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_5"] input[name="form_text_17"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_6"] input[name="form_text_24"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_7"] input[name="form_text_30"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_8"] input[name="form_text_36"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_9"] input[name="form_text_40"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_10"] input[name="form_text_43"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_11"] input[name="form_text_49"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_13"] input[name="form_text_56"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_16"] input[name="form_text_71"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_17"] input[name="form_text_73"]').mask("+7 (999) 999-99-99");////
	$('input[name="number"]').mask("+7 (999) 999-99-99");
	$('input[name="PROPERTY[75][0]"]').mask("+7 (999) 999-99-99");
    $('select').on('chosen:ready', function(e, chosen) {
        $('#writingToService').hide();
        $('#writingToServiceOnService').hide();
        $('#calculateLoan').hide();
        $('#calculateLoanOnCredit').hide();
        $('#signUpForATestDrive').hide();
        $('#handOverInOffset').hide();
        $('#getConsult').hide();
        $('#videoFromMain1').hide();
        $('#writingToServiceOnRepairS').hide();
        $('#writingToServiceOnRepairK').hide();
    }).chosen({disable_search: true});
	
    $('.news-bxslider').bxSlider({
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 335,
        slideMargin: 10,
        controls: true,
        auto: true,
        captions: true
    });
    $(".news-bxslider .news-item-fancy").attr("rel", "album").fancybox({
        wrapCSS : "news-item-fancybox",
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
    function closeNav () {
        if ($(window).width() <= 992) {
            $('#header-main nav').removeClass('open_nav');
            $('#header-main nav').addClass('close_nav');
        } else {
            $('#header-main nav').removeClass('close_nav');
            $('#header-main nav').addClass('open_nav');
        };
    };
    closeNav();
    $(window).resize(function(event) {
        closeNav();
    });
    $('#burger').click(function(event) {
        if ($('#header-main nav').hasClass('close_nav')) {
            $('#header-main nav').removeClass('close_nav').addClass('open_nav');
        } else if ($('#header-main nav').hasClass('open_nav')) {
            $('#header-main nav').removeClass('open_nav').addClass('close_nav');
        }
    });
    $('#header-main nav > ul > li > a').click(function(){
      $(this).siblings('ul').slideToggle();
    });
    $(".news-slider-next").click(function(){
        $('.news-slider').trigger('owl.next');
    });
    $(".news-slider-prev").click(function(){
        $('.news-slider').trigger('owl.prev');
    });
    function newsArr () {
        if (($('.owl-prev').width() !== 0) && ($('.owl-next').width() !== 0)) {
            $('.news-slider-prev').css('display', 'block');
            $('.news-slider-next').css('display', 'block');
        } else {
            $('.news-slider-prev').css('display', 'none');
            $('.news-slider-next').css('display', 'none');
        }
    };
    newsArr();
    $(window).resize(function(event) {
        newsArr();
    });
    $(".news-owl").owlCarousel({
        items : 4,
        itemsCustom : [
            [0, 1],
            [590, 2],
            [768, 3],
            [1160, 4]
        ],
        navigation : true
    });
    $('.advantages-slider-bx').bxSlider({
        adaptiveHeight: false
    });
    $("#advantages-video-gallery").owlCarousel({
        items : 3,
        itemsCustom : [
            [0, 1],
            [590, 2],
            [768, 2],
            [1160, 3]
        ],
        navigation : true
    });
    $(".unhide-shares").on('click', function(){
        $(".shares-hide").each(function(){
            $(this).removeClass("shares-hide");
        });
        $(".unhide-shares").css("display", "none");
    });
    
    $('div.accordionButton').click(function() {
        $(this).next().slideToggle( "slow" );
        $(this).toggleClass('open');
    });
    $("div.accordionContent").hide();
});
