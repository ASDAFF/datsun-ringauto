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
		url: "/bitrix/templates/datsun/js/init.js",
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
    $('input[name="DATE"]').datetimepicker({allowTimes: aTimes});
    $('input[name="DATE"]').mask("9999/99/99 99:99");////
    //

    $('input[name="PHONE"]').mask("+7 (999) 999-99-99");

    $('select').on('chosen:ready', function(e, chosen) {
        $('#offers-messages').hide();
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
    $('.offer-bxslider').bxSlider({
        minSlides: 1,
        maxSlides: 4,
        adaptiveHeight:true,
        slideWidth: 350,
        slideMargin: 0,
        controls: true,
        auto: true,
        captions: false,
        pager:false
    });
    $(".offer-bxslider .news-item-fancy").attr("rel", "album").fancybox({
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
    $(".offers-slider-next").click(function(){
        $('.offers-slider').trigger('owl.next');
    });
    $(".offers-slider-prev").click(function(){
        $('.offers-slider').trigger('owl.prev');
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
    function offerArr () {
        if (($('.owl-prev').width() !== 0) && ($('.owl-next').width() !== 0)) {
            $('.offers-slider-prev').css('display', 'block');
            $('.offers-slider-next').css('display', 'block');
        } else {
            $('.offers-slider-prev').css('display', 'none');
            $('.offers-slider-next').css('display', 'none');
        }
    };
    newsArr();
    offerArr();
    $(window).resize(function(event) {
        newsArr();
        offerArr();
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
