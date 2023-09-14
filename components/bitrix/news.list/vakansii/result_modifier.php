<?
// if(!CModule::IncludeModule("iblock"))
// return; 



// foreach($arResult["ITEMS"] as $key => $item)
// {
//     $filial = $item["PROPERTIES"]["FILIAL"]["VALUE"];
//     $sfera = $item["PROPERTIES"]["SFERA_TRUDA"]["VALUE"];
    
//     $get_filial = CIBlockElement::GetByID($filial);
//     $get_sfera = CIBlockElement::GetByID($sfera);
    
//     if($ar_filial = $get_filial->GetNext() && $ar_sfera = $get_sfera->GetNext())
//     {
//         $arResult["ITEMS"][$key]["SFERA"] = $ar_sfera["NAME"];
//         $arResult["ITEMS"][$key]["FILIAL"] = $ar_filial["NAME"];
//     }
// }

// $filial = 
// $sfera = 
$arSelectFilial = Array("ID", "NAME", "DATE_ACTIVE_FROM");
$arFilterFilial = Array("IBLOCK_ID"=>24, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$resFilial = CIBlockElement::GetList(Array(), $arFilterFilial, false, Array("nPageSize"=>200), $arSelectFilial);
while($ob = $resFilial->GetNextElement())
{
 $arFields = $ob->GetFields();
 $arResult["FILIALS"][] = $arFields;
}

$arSelectSfera = Array("ID", "NAME", "DATE_ACTIVE_FROM");
$arFilterSfera = Array("IBLOCK_ID"=>25, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$resSfera = CIBlockElement::GetList(Array(), $arFilterSfera, false, Array("nPageSize"=>200), $arSelectSfera);
while($ob = $resSfera->GetNextElement())
{
 $arFields = $ob->GetFields();
 $arResult["SFERAS"][] = $arFields;
}


?>