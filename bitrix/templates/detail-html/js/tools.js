function closePreloader() {
    $('#preloader').fadeOut('fast'); // will fade out the white DIV that covers the website.
    $('#preloader .inner').fadeOut(); // will first fade out the loading animation    
}

setTimeout(closePreloader, 100);

$(document).ready(function($) {


    $('input[name="PHONE"]').mask("+7 (999) 999-99-99");
	
/*галочки в формах и отправка целей - НАЧАЛО************************************************/



	
	$('form[name="SIMPLE_FORM_2"]').submit(function(e){
			
			if($(this).find('input.zapis_check').length > 0){
				if($(this).find('input.zapis_check').prop('checked') == true){
				
				$(this).find('input.zapis_check').removeClass('not_check');
				return true;
				 
				} else{
						
					$(this).find('input.zapis_check').addClass('not_check');
					return false;
				}
			}
		});
		
	$('form[name="SIMPLE_FORM_4"]').submit(function(e){
			
			if($(this).find('input.zapis_check').length > 0){
				if($(this).find('input.zapis_check').prop('checked') == true){
				
				$(this).find('input.zapis_check').removeClass('not_check');
				return true;
				 
				} else{
						
					$(this).find('input.zapis_check').addClass('not_check');
					return false;
				}
			}
		});
		
		$('form[name="SIMPLE_FORM_5"]').submit(function(e){
	
			if($(this).find('input.zapis_check').length > 0){
				if($(this).find('input.zapis_check').prop('checked') == true){
				
				$(this).find('input.zapis_check').removeClass('not_check');

				return true;
				 
				} else{
						
					$(this).find('input.zapis_check').addClass('not_check');
					return false;
				}
			}
		});
		

		
		
		$('form[name="SIMPLE_FORM_6"]').submit(function(e){		
			if($(this).find('input.zapis_check').length > 0){
				if($(this).find('input.zapis_check').prop('checked') == true){
				
				$(this).find('input.zapis_check').removeClass('not_check');
					return true;
				 
				} else{
						
					$(this).find('input.zapis_check').addClass('not_check');
					return false;
				}
			}
		});
		

		
		$('form[name="SIMPLE_FORM_7"]').submit(function(e){
					
			if($(this).find('input.zapis_check').length > 0){
				if($(this).find('input.zapis_check').prop('checked') == true){
				
				$(this).find('input.zapis_check').removeClass('not_check');

				return true;
				 
				} else{
						
					$(this).find('input.zapis_check').addClass('not_check');
					return false;
				}
			}
		});
		

		$('form[name="SIMPLE_FORM_15"]').submit(function(e){
			
			if($(this).find('input.zapis_check').length > 0){
				if($(this).find('input.zapis_check').prop('checked') == true){
				
				$(this).find('input.zapis_check').removeClass('not_check');
				return true;
				 
				} else{
						
					$(this).find('input.zapis_check').addClass('not_check');
					return false;
				}
			}
		});
		
		$('form[name="SIMPLE_FORM_12"]').submit(function(e){
			
			if($(this).find('input.zapis_check').length > 0){
				if($(this).find('input.zapis_check').prop('checked') == true){
				
				$(this).find('input.zapis_check').removeClass('not_check');
				return true;
				 
				} else{
						
					$(this).find('input.zapis_check').addClass('not_check');
					return false;
				}
			}
		});
	/*галочки в формах и отправка целей - КОНЕЦ************************************************/	
		
	// подменю
    $('nav > ul > li > a').click(function(e) {
        var curLi = $(this).parent();
        if (curLi.find('ul').length > 0) {
            if (curLi.hasClass('open')) {
                $('.header-submenu').stop().slideUp();
                curLi.removeClass('open');
            } else {
                $('nav > ul > li.open').removeClass('open');
                curLi.addClass('open');
                $('.header-submenu').stop().hide();
                $('.header-submenu').html(curLi.find('ul').clone());
                $('.header-submenu').stop().slideDown();
            }
            e.preventDefault();
        }
    });
    if(!Modernizr.svg) {
        var images = $('img[data-png-fallback]');
        images.each(function(i) {
            $(this).attr('src', $(this).data('png-fallback'));
        });
    }
    // определение размера страницы
    $(window).bind('load resize', function() {
        var curWidth = $(window).width();

        $('body').removeClass('page-1080 page-1160 page-1240 page-1320 page-1400');
        if ((curWidth >= 1080) || (curWidth <= 1080)) {
            if (curWidth >= 1160) {
                if (curWidth >= 1240) {
                    if (curWidth >= 1320) {
                        if (curWidth >= 1400) {
                            $('body').addClass('page-1400');
                        } else {
                            $('body').addClass('page-1320');
                        }
                    } else {
                        $('body').addClass('page-1240');
                    }
                } else {
                    $('body').addClass('page-1160');
                }
            } else {
                $('body').addClass('page-1080');
            }
        }
        // if (curWidth <= 1160) {
        // 	$('body').addClass('page-1080');
        // } else if (curWidth <= 1240) {
        // 	$('body').addClass('page-1160');
        // } else if (curWidth <= 1320) {
        // 	$('body').addClass('page-1240');
        // } else if (curWidth <= 1400) {
        // 	$('body').addClass('page-1320');
        // } else if (curWidth > 1400) {
        // 	$('body').addClass('page-1400');
        // }

        $('.submenu-inner ul').width($('.header-inner').width() - ($('nav ul').offset().left - $('.header-inner').offset().left));
    });
    $('.bxslider-credit').bxSlider({
        auto: true,
        mode: 'fade'
    });
    $('.bxslider-exter').bxSlider({
        auto: true,
        mode: 'fade',
        controls: false
    });
    $('.bxslider-inter').bxSlider({
        auto: true,
        mode: 'fade',
        controls: false
    });
    $('.gallery').bxSlider();
    $("#phonecar_name_credit").mask("+7 (999) 999-99-99");
    $('#all_block .link_img').find('a').click(function(event) {
        //obj.readConfigUrl("/on-do/scripts/"+$(this).attr('data-color-switcher')+".xml");
        $('.color-name').text($(this).find('i').text());
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
    $(".form-fancybox").fancybox({
        wrapCSS: 'form-fancybox-modal',
        padding: 0
    });
    $('input[name="date"]').datetimepicker({
        allowTimes:[
            '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', 
            '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'
        ]
    });

    $('form[name="SIMPLE_FORM_6"] input[name="form_text_27"]').datetimepicker({allowTimes:[
            '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', 
            '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'
        ]});
    $('form[name="SIMPLE_FORM_6"] input[name="form_text_27"]').mask("9999/99/99 99:99");////
    $('input[name="phone"]').mask("+7 (999) 999-99-99");
	$('form[name="SIMPLE_FORM_15"] input[name="form_text_69"]').mask("+7 (999) 999-99-99");////
	$('form[name="SIMPLE_FORM_2"] input[name="form_text_5"]').mask("+7 (999) 999-99-99");////    
	$('form[name="SIMPLE_FORM_5"] input[name="form_text_17"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_6"] input[name="form_text_24"]').mask("+7 (999) 999-99-99");////
    $('form[name="SIMPLE_FORM_7"] input[name="form_text_30"]').mask("+7 (999) 999-99-99");////

    $('select').on('chosen:ready', function(e, chosen) {
        $('#handOverInOffset').hide();
        $('#calculateLoan').hide();
        $('#signUpForATestDrive').hide();
    }).chosen({disable_search: true});
    $('#header-main nav .nav + ul > li > a').click(function(){
      $(this).siblings('ul').slideToggle();
    });
    $('#header-main nav .nav > li > a').click(function(event) {
        if ($('#header-main nav').hasClass('open_nav')) {
            $('#header-main nav').removeClass('open_nav');
            $('#header-main nav').addClass('close_nav');
        };
    });
    function blockBgTop () {
        console.log($('.block-bg').css('transform'));
        if (($('.block-bg').css('transform') == 'matrix(1, 0, 0, 1, 0, -66)') || ($('.block-bg').css('transform') == 'matrix(1, 0, 0, 1, 0, 0)')) {
            $('.block-bg').css('top', '52px');
        } else {
             $('.block-bg').css('top', '30px');
        }
    }
    $(window).resize(function(event) {
        blockBgTop();
    });

    var blockBgTopReady = function() {
        if ($('.block-bg').css('transform') == 'none') {
            var timeoutId = setTimeout(blockBgTopReady, 50);
        } else {
            clearTimeout(timeoutId);
            blockBgTop();
        }
    };
    blockBgTopReady();
});