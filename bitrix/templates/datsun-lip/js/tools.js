(function($) {

    $(document).ready(function() {

        // слайдер
        $('.slider').each(function() {
            var curSlider = $(this);
            curSlider.data('curIndex', 0);
            curSlider.data('disableAnimation', true);

            if (curSlider.find('li').length > 1) {
                var newHTML = '';
                curSlider.find('li').each(function() {
                    newHTML += '<a href="#"></a>';
                });
                curSlider.find('.slider-ctrl-inner').html(newHTML);
                curSlider.find('.slider-ctrl-inner a:first').addClass('active');
            } else {
                curSlider.find('.slider-next, .slider-prev').hide();
            }
        });

        $(window).bind('load resize', function() {
            var curWidth = $('.wrapper').width();

            $('.slider').each(function() {
                var curSlider = $(this);
                curSlider.find('li').width(curWidth);
                curSlider.find('ul').width(curWidth * (curSlider.find('li').length + 1));
                curSlider.find('ul').css({'left': -curSlider.data('curIndex') * curWidth});
            });

            $('.slider-prev, .slider-next').each(function() {
                $(this).css({'margin-top': -$(this).height() / 1.5});
            });

            $('.slider-text').each(function() {
                $(this).css({'margin-top': -$(this).height() / 1.5});
            });
        });

        $('.slider-next').click(function(e) {
            var curSlider = $(this).parents().filter('.slider');

            if (curSlider.data('disableAnimation')) {
                var curIndex = curSlider.data('curIndex');
                curIndex++;
                var isLast = false;
                if (curIndex == curSlider.find('li').length) {
                    isLast = true;
                    curSlider.find('ul').append(curSlider.find('li:first').clone());
                }

                curSlider.data('disableAnimation', false);
                curSlider.find('ul').animate({'left': -curIndex * curSlider.find('li:first').width()}, function() {
                    if (isLast) {
                        curIndex = 0;
                        curSlider.find('ul').css({'left': 0});
                        curSlider.find('li:last').remove();
                    }

                    curSlider.find('.slider-ctrl-inner a.active').removeClass('active');
                    curSlider.find('.slider-ctrl-inner a').eq(curIndex).addClass('active');

                    curSlider.data('curIndex', curIndex);
                    curSlider.data('disableAnimation', true);
                });
            }

            e.preventDefault();
        });

        $('.slider-prev').click(function(e) {
            var curSlider = $(this).parents().filter('.slider');

            if (curSlider.data('disableAnimation')) {
                var curIndex = curSlider.data('curIndex');
                curIndex--;
                var isFirst = false;
                if (curIndex == -1) {
                    isFirst = true;
                    curSlider.find('ul').prepend(curSlider.find('li:last').clone());
                    curSlider.find('ul').css({'left': -curSlider.find('li:first').width()});
                    curIndex = 0;
                }

                curSlider.data('disableAnimation', false);
                curSlider.find('ul').animate({'left': -curIndex * curSlider.find('li:first').width()}, function() {
                    if (isFirst) {
                        curSlider.find('li:first').remove();
                        curIndex = curSlider.find('li').length - 1;
                        curSlider.find('ul').css({'left': -curIndex * curSlider.find('li:first').width()});
                    }

                    curSlider.find('.slider-ctrl-inner a.active').removeClass('active');
                    curSlider.find('.slider-ctrl-inner a').eq(curIndex).addClass('active');

                    curSlider.data('curIndex', curIndex);
                    curSlider.data('disableAnimation', true);
                });
            }

            e.preventDefault();
        });

        $('.slider').on('click', '.slider-ctrl-inner a', function(e) {
            var curSlider = $(this).parents().filter('.slider');

            if (curSlider.data('disableAnimation')) {
                var curIndex = curSlider.find('.slider-ctrl-inner a').index($(this));

                curSlider.find('.slider-ctrl-inner a.active').removeClass('active');
                curSlider.find('.slider-ctrl-inner a').eq(curIndex).addClass('active');

                curSlider.data('curIndex', curIndex);
                curSlider.data('disableAnimation', false);
                curSlider.find('ul').animate({'left': -curIndex * curSlider.find('li:first').width()}, function() {
                    curSlider.data('curIndex', curIndex);
                    curSlider.data('disableAnimation', true);
                });
            }

            e.preventDefault();
        });
		$(".datsun-super-table iframe .form-bottom .btn").click(function(){
			alert("aaaaa");
		});
        // новости
        $('.news-slider').owlCarousel({
            items : 3,
            itemsCustom : [
                [0, 1],
                [590, 2],
                [768, 2],
                [1160, 3]
            ],
            navigation : true
        });
        $('.offers-slider').owlCarousel({
            items : 3,
            itemsCustom : [
                [0, 1],
                [590, 2],
                [768, 2],
                [1160, 3]
            ],
            navigation : true
        });
        $('.owl-wrapper .owl-item:nth-child(3n+1)').addClass('first');
        $('.owl-wrapper .owl-item:nth-child(3n+2)').addClass('second');
        $('.owl-wrapper .owl-item:nth-child(3n+3)').addClass('third');

        // слайдер фотографий
        $('.slider-inside').each(function() {
            var curSlider = $(this);
            curSlider.data('curIndex', 0);
            curSlider.data('disableAnimation', true);

            if (curSlider.find('li').length > 1) {
                var newHTML = '';
                curSlider.find('li').each(function() {
                    newHTML += '<a href="#"></a>';
                });
                curSlider.find('.slider-inside-ctrl-inner').html(newHTML);
                curSlider.find('.slider-inside-ctrl-inner a:first').addClass('active');
            } else {
                curSlider.find('.slider-inside-next, .slider-inside-prev').hide();
            }
        });

        $(window).bind('load resize', function() {
            var curWidth = $('.wrapper').width();

            $('.slider-inside').each(function() {
                var curSlider = $(this);
                curSlider.find('li').width(curWidth);
                curSlider.find('ul').width(curWidth * (curSlider.find('li').length + 1));
                curSlider.find('ul').css({'left': -curSlider.data('curIndex') * curWidth});
            });

            $('.slider-inside-prev, .slider-inside-next').each(function() {
                $(this).css({'margin-top': -$(this).height() / 2});
            });
        });

        $('.slider-inside-next').click(function(e) {
            var curSlider = $(this).parents().filter('.slider-inside');

            if (curSlider.data('disableAnimation')) {
                var curIndex = curSlider.data('curIndex');
                curIndex++;
                var isLast = false;
                if (curIndex == curSlider.find('li').length) {
                    isLast = true;
                    curSlider.find('ul').append(curSlider.find('li:first').clone());
                }

                curSlider.data('disableAnimation', false);
                curSlider.find('ul').animate({'left': -curIndex * curSlider.find('li:first').width()}, function() {
                    if (isLast) {
                        curIndex = 0;
                        curSlider.find('ul').css({'left': 0});
                        curSlider.find('li:last').remove();
                    }

                    curSlider.find('.slider-inside-ctrl-inner a.active').removeClass('active');
                    curSlider.find('.slider-inside-ctrl-inner a').eq(curIndex).addClass('active');

                    curSlider.data('curIndex', curIndex);
                    curSlider.data('disableAnimation', true);
                });
            }

            e.preventDefault();
        });

        $('.slider-inside-prev').click(function(e) {
            var curSlider = $(this).parents().filter('.slider-inside');

            if (curSlider.data('disableAnimation')) {
                var curIndex = curSlider.data('curIndex');
                curIndex--;
                var isFirst = false;
                if (curIndex == -1) {
                    isFirst = true;
                    curSlider.find('ul').prepend(curSlider.find('li:last').clone());
                    curSlider.find('ul').css({'left': -curSlider.find('li:first').width()});
                    curIndex = 0;
                }

                curSlider.data('disableAnimation', false);
                curSlider.find('ul').animate({'left': -curIndex * curSlider.find('li:first').width()}, function() {
                    if (isFirst) {
                        curSlider.find('li:first').remove();
                        curIndex = curSlider.find('li').length - 1;
                        curSlider.find('ul').css({'left': -curIndex * curSlider.find('li:first').width()});
                    }

                    curSlider.find('.slider-inside-ctrl-inner a.active').removeClass('active');
                    curSlider.find('.slider-inside-ctrl-inner a').eq(curIndex).addClass('active');

                    curSlider.data('curIndex', curIndex);
                    curSlider.data('disableAnimation', true);
                });
            }

            e.preventDefault();
        });

        $('.slider-inside').on('click', '.slider-inside-ctrl-inner a', function(e) {
            var curSlider = $(this).parents().filter('.slider-inside');

            if (curSlider.data('disableAnimation')) {
                var curIndex = curSlider.find('.slider-inside-ctrl-inner a').index($(this));

                curSlider.find('.slider-inside-ctrl-inner a.active').removeClass('active');
                curSlider.find('.slider-inside-ctrl-inner a').eq(curIndex).addClass('active');

                curSlider.data('curIndex', curIndex);
                curSlider.data('disableAnimation', false);
                curSlider.find('ul').animate({'left': -curIndex * curSlider.find('li:first').width()}, function() {
                    curSlider.data('curIndex', curIndex);
                    curSlider.data('disableAnimation', true);
                });
            }

            e.preventDefault();
        });

        // выбор цвета
        $('.color-photos').each(function() {
            var curBlock = $(this);
            var curIndex = curBlock.find('img').index(curBlock.find('img.active'));
            curBlock.data('curIndex', curIndex);
        });

        $('.color-list a').click(function(e) {
            $('.color-item small').stop(true, true);

            var curItem = $(this).parent();

            if (!curItem.hasClass('active')) {
                var newIndex = $('.color-item').index(curItem);
                var curIndex = $('.color-photos').data('curIndex');

                $('.color-photos img').eq(curIndex).css({'z-index': 2, 'position': 'absolute'});
                $('.color-photos img').eq(newIndex).css({'z-index': 1, 'position': 'relative', 'left': 0, 'top': 0, 'display': 'block'});
                $('.color-photos').data('curIndex', newIndex);
                $('.color-photos img').eq(curIndex).fadeOut();

                $('.color-item.active small').fadeOut(function() {
                    $('.color-item.active').removeClass('active');
                    curItem.addClass('active');
                    curItem.find('small').fadeIn();
                });
            }

            e.preventDefault();
        });

        // комплектации
        $(window).bind('load resize', function() {
            $('.complect-item.active').each(function() {
                var curBlock = $(this).find('.complect-item-inner');
                var curX = curBlock.offset().left;
                var parrentX = $('.complect').offset().left;
                $('.complect-arrow').css({'left': curX - parrentX});
            });
        });

        $('.complect-item-inner').click(function() {
            var curBlock = $(this).parent();
            if (!curBlock.hasClass('active')) {
                var curIndex = $('.complect-item').index(curBlock);
                $('.complect-item').removeClass('active')
                curBlock.addClass('active');

                var curX = curBlock.find('.complect-item-inner').offset().left;
                var parrentX = $('.complect').offset().left;
                $('.complect-arrow').stop(true, true).animate({'left': curX - parrentX});

                $('.detail-inner').height($('.detail-item.active').height());
                $('.detail-item.active').fadeOut(function() {
                    $(this).removeClass('active')
                    $('.detail-item').eq(curIndex).fadeIn(function() {
                        $(this).addClass('active');
                    });
                    $('.detail-inner').animate({'height': $('.detail-item').eq(curIndex).height()});
                });
            }
        });

        // меню на странице авто
        $('.submenu ul a').click(function(e) {
            $.scrollTo($(this).attr('href'), 500);
            e.preventDefault();
        });

        // модель
        $(window).load(function() {
            $('.model-loading').hide();
        });

        var modelStart = -1;

        $('.model-360').each(function() {
            var curBlock = $(this);
            var curIndex = curBlock.find('img').index(curBlock.find('img.active'));

            curBlock.data('curIndex', curIndex);
        });

        $('.model-360').mousedown(function(e) {
            modelStart = e.pageX;
        });

        $('.model-360').mousemove(function(e) {
            if (modelStart > -1) {
                var curBlock = $('.model-360');
                var curIndex = curBlock.data('curIndex');
                if (modelStart < e.pageX) {
                    curIndex++;
                    if (curIndex >= curBlock.find('img').length) {
                        curIndex = 0;
                    }
                } else if (modelStart > e.pageX) {
                    curIndex--;
                    if (curIndex < 0) {
                        curIndex = curBlock.find('img').length - 1;
                    }
                }
                curBlock.data('curIndex', curIndex);
                curBlock.find('img').removeClass('active');
                curBlock.find('img').eq(curIndex).addClass('active');
                modelStart = e.pageX;
            }
        });

        $(document).mouseup(function(e) {
            modelStart = -1;
        });

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
		
		
		/*галочки в формах + цели НАЧАЛО***************************************************************************/


        $('form').submit(function(e){

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

		/*галочки в формах + цели - КОНЕЦ***************************************************************************/

    });

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
        //  $('body').addClass('page-1080');
        // } else if (curWidth <= 1240) {
        //  $('body').addClass('page-1160');
        // } else if (curWidth <= 1320) {
        //  $('body').addClass('page-1240');
        // } else if (curWidth <= 1400) {
        //  $('body').addClass('page-1320');
        // } else if (curWidth > 1400) {
        //  $('body').addClass('page-1400');
        // }

        $('.submenu-inner ul').width($('.header-inner').width() - ($('nav ul').offset().left - $('.header-inner').offset().left));
    });

})(jQuery);