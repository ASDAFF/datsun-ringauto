$(window).load(function() { // makes sure the whole site is loaded

	"use strict";



//------------------------------------------------------------------------
//						PRELOADER SCRIPT
//------------------------------------------------------------------------
    // $('#preloader').delay(4).fadeOut('fast'); // will fade out the white DIV that covers the website.
    // $('#preloader .inner').fadeOut(); // will first fade out the loading animation
	$.ajax({
		type: "GET",
		url: "/bitrix/templates/detail-html/js/init.js",
		dataType: "script",
		cache: true
	});
//------------------------------------------------------------------------
//						WOW ANIMATION SETTINGS
//------------------------------------------------------------------------
	var wow = new WOW({
    	offset:100,        // distance to the element when triggering the animation (default is 0)
    	mobile:false       // trigger animations on mobile devices (default is true)
  	});
	wow.init();



//------------------------------------------------------------------------
//						STELLAR (PARALLAX) SETTINGS
//------------------------------------------------------------------------
if(!(navigator.userAgent.match(/iPhone|iPad|iPod|Android|BlackBerry|IEMobile/i))) {
	$.stellar({
		horizontalScrolling: false,
		positionProperty: 'transform'
	});
}



//------------------------------------------------------------------------
//						NAVBAR SLIDE SCRIPT
//------------------------------------------------------------------------
	$(window).scroll(function () {
        if ($(window).scrollTop() > $("nav").height()) {
            $("nav.navbar-slide").addClass("show-menu");
        } else {
            $("nav.navbar-slide").removeClass("show-menu");
			$(".navbar-slide .navMenuCollapse").collapse({toggle: false});
			$(".navbar-slide .navMenuCollapse").collapse("hide");
			$(".navbar-slide .navbar-toggle").addClass("collapsed");
        }
    });

})




$(document).ready(function(){

	"use strict";



//------------------------------------------------------------------------
//						ANCHOR SMOOTHSCROLL SETTINGS
//------------------------------------------------------------------------
	$('a.goto, .navbar .nav a').smoothScroll({offset: -100, speed: 1200});
	$('a.innovations-down').smoothScroll({offset: -100, speed: 1200});



//------------------------------------------------------------------------
//						FULL HEIGHT SECTION SCRIPT
//------------------------------------------------------------------------
	$("#minimal-intro").css("min-height",$( window ).height());
	$( window ).resize(function() {
		$("#minimal-intro").css("min-height",$( window ).height());
	})




//------------------------------------------------------------------------
//						INTRO SUPERSLIDER SETTINGS
//------------------------------------------------------------------------
	$("#slides").superslides({
		play: 8000, //Milliseconds before progressing to next slide automatically. Use a falsey value to disable.
		animation: "fade", //slide or fade. This matches animations defined by fx engine.
		pagination: false,
		inherit_height_from:".intro-block",
		inherit_width_from:".intro-block"
	});




//------------------------------------------------------------------------
//						SCREENSHOTS SLIDER SETTINGS
//------------------------------------------------------------------------
    var owl = $("#screenshots-slider");
    owl.owlCarousel({
        items : 5,
        itemsDesktop : [1400,4],
        itemsDesktopSmall : [1200,3],
        itemsTablet: [900,2],
        itemsMobile : [600,1],
		stopOnHover:true
    });



//------------------------------------------------------------------------
//						TESTIMONIALS SLIDER SETTINGS
//------------------------------------------------------------------------
    var owl = $("#testimonials-slider");
    owl.owlCarousel({
        singleItem:true,
		autoPlay:5000,
		stopOnHover:true
    });



//------------------------------------------------------------------------
//                    MAGNIFIC POPUP(LIGHTBOX) SETTINGS
//------------------------------------------------------------------------

    $('#screenshots-slider').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });



//------------------------------------------------------------------------
//					SUBSCRIBE FORM VALIDATION'S SETTINGS
//------------------------------------------------------------------------
    $('#subscribe_form').validate({
        onfocusout: false,
        onkeyup: false,
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        errorPlacement: function(error, element) {
            error.appendTo( element.closest("form"));
        },
        messages: {
            email: {
                required: "We need your email address to contact you",
                email: "Please, enter a valid email"
            }
        },

        highlight: function(element) {
            $(element)
        },

        success: function(element) {
            element
            .text('').addClass('valid')
        }
    });




//------------------------------------------------------------------------------------
//						SUBSCRIBE FORM MAILCHIMP INTEGRATIONS SCRIPT
//------------------------------------------------------------------------------------
    // $('#subscribe_form').submit(function() {
    //     $('.error').hide();
    //     $('.error').fadeIn();
    //     // submit the form
    //     if($(this).valid()){
    //         $('#subscribe_submit').button('loading');
    //         var action = $(this).attr('action');
    //         $.ajax({
    //             url: action,
    //             type: 'POST',
    //             data: {
    //                 newsletter_email: $('#subscribe_email').val()
    //             },
    //             beforeSend: function(){},
				// 	success: function(html) {
				// 		if(html=="sent"){
				// 			window.open('/ok.html','_parent','width=300','height=300','scrollbars=yes');
				// 		} else if (html=="errors"){
				// 		}
				// 	}
				// });
    //     }
    //     return false;
    // });




//------------------------------------------------------------------------------------
//						CONTACT FORM VALIDATION'S SETTINGS
//------------------------------------------------------------------------------------
    $('#contact_form').validate({
        onfocusout: false,
        onkeyup: false,
        rules: {
            name: "required",
            message: "required",
			phone: "required"
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        messages: {
            name: "Введите Ваше имя.",
			phone: "Ваш телефон.",
            message: "Ваш коментарий."
        },

        highlight: function(element) {
            $(element)
            .text('').addClass('error')
        },

        success: function(element) {
            element
            .text('').addClass('valid')
        }
    });




//------------------------------------------------------------------------------------
//								CONTACT FORM SCRIPT
//------------------------------------------------------------------------------------

    // $('#contact_form').submit(function() {
    // 	ga('send', 'pageview', {'page': 'form-submit','title': 'Отправка заявки'});
    //     // submit the form
    //     if($(this).valid()){
    //         $('#contact_submit').button('loading');
    //         var action = $(this).attr('action');
    //         $.ajax({
    //             url: action,
    //             type: 'POST',
    //             data: {
    //                 contactname: $('#contact_name').val(),
    //                 contactemail: $('#contact_email').val(),
    //                 contactmessage: $('#contact_message').val()
    //             },
				// beforeSend: function(){},
				// 	success: function(html) {
				// 		if(html=="sent"){
				// 			ga('send', 'pageview', {'page': 'form-success','title': 'Успешная отправка заявки'});
				// 			window.open('/ok.html','_parent','width=300','height=300','scrollbars=yes');
				// 		} else if (html=="errors"){
				// 		}
				// 	  }

				// });
    //         } else {
    //         $('#contact_submit').button('reset')
    //     }
    //     return false;
    // });



	$('#all_block .link_img a').click(function(){
		if($('a').hasClass('select_car')) {
			$('#all_block .link_img a').removeClass('select_car');
		}
		$(this).addClass('select_car');

		var dataColorSwitcher = $(this).attr('data-color-switcher');
		$('#color_carimg').attr('src', dataColorSwitcher);
		return false;
	});


	$('#submitcar_name').click(function(){
        ga('send', 'pageview', {'page': 'form-submit','title': 'Отправка заявки'});
		$.ajax({
			url: '/scripts/buy_model.php',
			type: 'POST',
			data: {
				buycar_name: $('#buycar_name').val(),
				phonecar_name: $('#phonecar_name').val(),
				modelcar_name: $('#modelcar_name').val()
			},
			beforeSend: function(){},
				success: function(html) {
					if(html=="sent"){
                        ga('send', 'pageview', {'page': 'form-success','title': 'Успешная отправка заявки'});
						window.open('/ok.html','_parent','width=300','height=300','scrollbars=yes');
					} else if (html=="errors"){
					}
				  }

			});
	});

	$('#submitcar_name_credit').click(function(){
		$.ajax({
			url: '/scripts/credit.php',
			type: 'POST',
			data: {
				buycar_name: $('#buycar_name_credit').val(),
				phonecar_name: $('#phonecar_name_credit').val(),
				modelcar_name: $('#modelcar_name_credit').val()
			},
			beforeSend: function(){},
				success: function(html) {
					if(html=="sent"){
						window.open('/ok.html','_parent','width=300','height=300','scrollbars=yes');
					} else if (html=="errors"){
					}
				  }

			});
	});

	
	$('#all_cars_block .line_block').eq(10).addClass('qwerty');
	$('.qwerty').nextAll('.line_block').hide();
	$('.all_show').click(function(){
		$('.qwerty').nextAll('.line_block').show();
		$('.all_show').hide();
	});
});

