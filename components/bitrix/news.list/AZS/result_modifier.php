<?

$arResult["AYAL"] = "YES";

foreach($arResult["ITEMS"] as $item)
{
foreach($item["DISPLAY_PROPERTIES"]["AZS_TABLE"]["VALUE"] as $azsId)
{
    $azs = [];
    $arFilter = Array("IBLOCK_ID"=> 17, "ID"=> $azsId);
$res = CIBlockElement::GetList(Array(), $arFilter); // с помощью метода CIBlockElement::GetList вытаскиваем все значения из нужного элемента
if ($ob = $res->GetNextElement()){; // переходим к след элементу, если такой есть
    $arFields = $ob->GetFields(); // поля элемента
    $azs["FIELDS"] = $arFields;
    $arProps = $ob->GetProperties(); // свойства элемента
    $azs["PROPS"] = $arProps;
    $azs["REGION"]["NAME"] = $item["NAME"];
    $azs["REGION"]["ID"] = $item["ID"];
    $azs["PRICE"]["92"] = $item["DISPLAY_PROPERTIES"]["PRICE_P92"]["VALUE"];
    $azs["PRICE"]["95"] = $item["DISPLAY_PROPERTIES"]["PRICE_E95"]["VALUE"];
    $azs["PRICE"]["98"] = $item["DISPLAY_PROPERTIES"]["PRICE_E98"]["VALUE"];
    $azs["PRICE"]["100"] = $item["DISPLAY_PROPERTIES"]["PRICE_100"]["VALUE"];
    $azs["PRICE"]["DT"] = $item["DISPLAY_PROPERTIES"]["PRICE_DIESEL"]["VALUE"];
    $azs["PRICE"]["M"] = $item["DISPLAY_PROPERTIES"]["PRICE_METAN"]["VALUE"];
    $arResult["AZS"][] = $azs;
   }

}
}

?>