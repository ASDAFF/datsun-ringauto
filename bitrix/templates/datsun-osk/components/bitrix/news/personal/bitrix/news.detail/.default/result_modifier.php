<?php

$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID" => $arResult['IBLOCK_ID'], "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arResult["ITEMS"][] = $arFields;
}
