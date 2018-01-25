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

    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
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

        <?
        $APPLICATION->IncludeFile("/include/top-menu.php", Array(), Array(
            "MODE"      => "html",
            "NAME"      => "Редактирование включаемой области раздела",
            "TEMPLATE"  => ""
        ));
        ?>

        <?
        //FILTER NEWS FOR SITE
        //$GLOBALS['newsFilter'] = array("PROPERTY_SITES_VALUE" => SITE_ID);
        //FILTER SLIDER TOP FOR SITE
        //$GLOBALS['sliderFilter'] = array("PROPERTY_SITES_VALUE" => SITE_ID);
        ?>

