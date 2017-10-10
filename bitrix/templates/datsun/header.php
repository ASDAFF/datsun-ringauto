<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <?$APPLICATION->ShowHead();?>

    <title><?$APPLICATION->ShowTitle()?></title>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/andrei.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/print.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/bitrix/templates/datsun/css/ie-lte8.css" />
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>


    <script src="<?=SITE_TEMPLATE_PATH?>/js/tools.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/modernizr.js" type="text/javascript" charset="utf-8"></script>

    <!--//PRIME//-->
    <script type="text/javascript" src="http://incut.prime-ltd.su/incut/incut.js" async></script>
    <link rel="stylesheet" href="http://incut.prime-ltd.su/incut/incut.css">
    <!--//PRIME//-->
</head>

<body class="">
<style>
    #panel {
        position: fixed;
        top: 0px;
        z-index: 10000;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        transition: top 0.2s;
    }

    #panel.hiddenz {
        top: -200px;
        display: none;
    }
</style>
<script>
    $(function(){
        var panel = $('#panel');
        panel.toggleClass('hiddenz');
        $(document).keypress("z",function(e) {
            if(e.ctrlKey && e.keyCode == '26') {
                //console.dir(e);
                //console.dir('ctrl+z pressed');
                panel.toggleClass('hiddenz');
            }
        });
    });
</script>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>


<!-- PRELOADER -->
<div id="preloader">
    <div class="radius inner">
        <div class="load-line"></div>
    </div>
</div>


<!-- wrapper -->
<div class="wrapper">
    <div class="wrapper-inner">

        <header id="header-main">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/header.png" alt="" class="header-bg" />
            <div class="header-inner">
                <div class="logo"><a href='/'></a></div>
                <div id="burger">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <div class="dealer-logo"><img src="<?=SITE_TEMPLATE_PATH?>/images/dealer-logo@2x.png" alt="" width="181" height="" /></div>

                <nav>
                    <ul id="horizontal-multilevel-menu">




                        <li>
                            <a href="/cars/" class="root-item">Автомобили<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                                <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                            </a>

                            <ul>
                                <li><a href="/on-do/"><img src="http://datsun-spb.ru/upload/medialibrary/d8d/nav_oniDO@2x.png" width="239" height="118" /><br>Datsun on-DO</a></li>
                                <li><a href="/offers/"><img src="<?=SITE_TEMPLATE_PATH?>/images/auto@2x.png" width="239" height="118" /><br>Автомобили в наличии</a></li>
                            </ul>

                        </li>
                        <li>

                            <a href="/specials/" class="root-item">Спецпредложения<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                                <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                            </a>

                            <ul>
                                <li><a href="/specials/shares/">Акции</a></li>
                                <li><a href="/specials/corp_sales/">Корпоративным клиентам</a></li>
                            </ul>

                        </li>

                        <li>
                            <a href="/maintenance/" class="root-item">Сервис<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                                <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                            </a>

                            <ul>

                                <li><a href="/maintenance/teh_service/">Техническое обслуживание</a></li>
                                <li><a href="/maintenance/repair/">Ремонт</a></li>
                                <li><a href="/maintenance/warranty/">Гарантия</a></li>
                                <li><a href="/maintenance/accessories/">Запчасти</a></li>
                                <li><a href="/maintenance/aksessuary/">Aксессуары</a></li>
                                <li><a href="/maintenance/o-servise/o-servise.php">О сервисе</a></li>
                            </ul>

                        </li>

                        <li>
                            <a href="/services/" class="root-item">Услуги<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                                <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                            </a>

                            <ul>

                                <li><a href="/services/credit/">Кредит и Страхование</a></li>
                                <li><a href="/services/trade-in/">TRADE-IN</a></li>
                                <li><a href="/services/assistance/">Datsun Assistance</a></li>
                            </ul>

                        </li>

                        <li>
                            <a href="/about/" class="root-item">О компании<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                                <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                            </a>

                            <ul>
                                <li><a href="/about/center/">CTK CENTER</a></li>
                                <li><a href="/about/people/">Наш коллектив</a></li>
                                <li><a href="/about/news/">Новости</a></li>
                                <li><a href="/about/reviews/">Благодарности</a></li>
                                <li><a href="/about/advantages/">О бренде</a></li>
                            </ul>

                        </li>

                        <li><a href="/contacts/" class="root-item">Контакты</a></li>

                    </ul>
                </nav>


            </div>
            <div class="header-submenu"></div>
        </header>
