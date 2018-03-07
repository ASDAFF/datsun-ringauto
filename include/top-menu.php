<header id="header-main">
    <img src="<?=SITE_TEMPLATE_PATH?>/images/header.png" alt="" class="header-bg" />
    <div class="header-inner">
        <div class="logo"><a href='/'></a></div>
        <div id="burger">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="dealer-logo"><a href='/'><img src="<?=SITE_TEMPLATE_PATH?>/images/dealer-logo@2x.png" alt="" width="181" height="" /></a></div>

        <nav>

            <?if(SITE_TEMPLATE_ID == 'detail-html' OR SITE_TEMPLATE_ID == 'detail-html-lip' OR SITE_TEMPLATE_ID == 'detail-html-osk'):?>
            <a class="navbar-brand goto" href="#wrap">Datsun on-DO:</a>
            <ul class="nav">
                <li><a href="#pricing-table">Комплектации и цены</a> </li>
                <li><a href="#innovations1">Кредит</a></li>
                <li><a href="#innovations">Экстерьер и интерьер</a></li>
                <li><a href="#bg_line_cars_9_color">Цвета кузова</a></li>
                <li><a href="#techspec">Характеристики</a></li>
                <li><a href="#screenshots">Особенности</a></li>
                <li><a href="#news">Галерея</a></li>
            </ul>
            <ul>
            <?else:?>
            <ul id="horizontal-multilevel-menu">
            <?endif;?>




                <li>
                    <a href="/cars/" class="root-item">Автомобили<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>
                        <li><a href="/on-do/"><img src="http://datsun-spb.ru/upload/medialibrary/d8d/nav_oniDO@2x.png" width="239" height="118" /><br>Datsun on-DO</a></li>
                        <li><a href="/mi-do/"><img src="http://datsun-spb.ru/upload/medialibrary/36e/nav_miDO@2x.png" width="239" height="118" /><br>Datsun mi-DO</a></li>
                        <li><a href="/offers/"><img src="<?=SITE_TEMPLATE_PATH?>/images/auto@2x.png" width="239" height="118" /><br>Автомобили в наличии</a></li>
                        <li><a href="/testdrive/"><img src="http://datsun-spb.ru/upload/medialibrary/ea5/test@2x.png" width="239" height="118" /><br>Тест-драйв</a></li>
                    </ul>

                </li>
                <li>

                    <a href="/specials/" class="root-item">Спецпредложения<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>
                        <li><a href="/offers/">Спецпредложения</a></li>
                        <li><a href="/shares/">Акции</a></li>
                        <li><a href="/corp-sales/">Корпоративным клиентам</a></li>
                    </ul>

                </li>

                <li>
                    <a href="/maintenance/" class="root-item">Сервис<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>

                        <li><a href="/teh-service/">Техническое обслуживание</a></li>
                        <li><a href="/repair/">Ремонт</a></li>
                        <li><a href="/warranty/">Гарантия</a></li>
                        <li><a href="/accessories/">Запчасти</a></li>
                        <li><a href="/aksessuary/">Aксессуары</a></li>
                        <li><a href="/o-servise/">О сервисе</a></li>
                    </ul>

                </li>

                <li>
                    <a href="/services/" class="root-item">Услуги<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>
                        <li><a href="/credit/">Кредит и Страхование</a></li>
                        <li><a href="/trade-in/">TRADE-IN</a></li>
                        <li><a href="/assistance/">Datsun Assistance</a></li>
                    </ul>

                </li>

                <li>
                    <a href="/about/" class="root-item">О компании<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>
                        <li><a href="/center/">Ринг Авто Север</a></li>
                        <li><a href="/people/">Наш коллектив</a></li>
                        <li><a href="/news/">Новости</a></li>
                        <li><a href="/reviews/">Благодарности</a></li>
                        <li><a href="/advantages/">О бренде</a></li>
                    </ul>

                </li>

                <li><a href="/contacts/" class="root-item">Контакты</a></li>

            </ul>
        </nav>

    </div>
    <div class="header-submenu"></div>
</header>