<?php

foreach($arResult["ITEMS"] as &$arItem){
    if(!$arItem["DETAIL_PICTURE"]["SRC"]){
        $arItem["DETAIL_PICTURE"]["SRC"] = '/bitrix/images/pxl.png';
    }

    if(!$arItem["PREVIEW_PICTURE"]){
        $arItem["PREVIEW_PICTURE"]["SRC"] = '/bitrix/images/pxl.png';
    }
}