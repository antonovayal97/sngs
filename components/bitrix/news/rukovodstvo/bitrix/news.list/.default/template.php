<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>





<div class="rukovodstvo-content">

	
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="rukovodstvo-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">  
		<div class="rukovodstvo-card--img">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"></div>
		<div class="rukovodstvo-card--description">
		<div class="rukovodstvo-card--name"><?=$arItem["NAME"]?></div>
		<div class="rukovodstvo-card--desc"><?=$arItem["PREVIEW_TEXT"];?></div>
		</div>
	</a>

<?endforeach;?>

</div>
