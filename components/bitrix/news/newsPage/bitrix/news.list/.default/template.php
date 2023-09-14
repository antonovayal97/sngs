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


<div class="novosti-content">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>




<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="novosti-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="novosti-card-left-left">
<?
if($arItem["PREVIEW_PICTURE"]["SRC"] != "")
{
?>
		<img class="novosti-card-right--data--img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
<?
}
else
{
?>
		<img class="novosti-card-right--data--img" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" style="background-color: #fff;object-fit: scale-down;border: 1px solid #c4c4c4;">
<?
}
?>
	</div>
	<div class="novosti-card-right">
		<span class="novosti-card-right--data">
		<?
$arParams["DATE_CREATE"]="j F Y";
echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat()));
?>
		</span>
		<span class="novosti-card-right--title">
		<?echo $arItem["NAME"]?>
		</span>
		<div class="novosti-card-right--link" >
			<span class="novosti-card-right-link--text">Подробнее</span>
			<span class="novosti-card-right-link--icon">
				<svg class="icon icon-minivector minivector__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#minivector" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#minivector"></use>
				</svg>
			</span>
		</div>
	</div>
</a>


<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>




</div>