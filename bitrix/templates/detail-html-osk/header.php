<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta charset="utf-8">

    <?$APPLICATION->ShowHead();?>

    <title><?$APPLICATION->ShowTitle()?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!--[if lt IE 9]><script type="text/javascript" src="scripts/html5shiv.js"></script><![endif]-->
    <!-- CSS -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/animate.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/animation.css">
    <!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/simple-line-icons.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/icomoon-soc-icons.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/chosen.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.datetimepicker.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/chosen.min.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style2.css"/>



</head>

<body data-spy="scroll" data-offset="140" data-target=".navMenuCollapse">
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

<div id="panel"><?$APPLICATION->ShowPanel();?></div>


<!-- PRELOADER -->
<div id="preloader">
    <div class="radius inner">
        <div class="load-line"></div>
    </div>
</div>



<div id="wrap">