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




<div class="av-content">
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		
<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="av-content-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

<div class="av-content-card--img">
<?
if($arItem["PREVIEW_PICTURE"]["SRC"] != "")
{
?>
	<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
<?}
else
{
?>

<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" style="background-color: #fff;object-fit: scale-down;border: 1px solid #c4c4c4;">
<?
}
?>
</div>
	<div class="av-content-card__top">
		<span>
			<?
			$arParams["DATE_CREATE"]="j F Y";
			echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat()));
			?>
		</span>
	</div>
	<div class="av-content-card__bottom">
		<span class="av-content-card__bottom-text"><?=$arItem["NAME"]?></span>
	</div>
</a>


		<?endforeach;?>
</div>

<style>
	.av-content-card:hover .av-content-card__top,.av-content-card:hover .av-content-card__bottom
	{
		color: #fff;
	}

	.av-content-card:hover
	{
		background: var(--color-gradient);
	}
	.av-content-card:hover .av-content-card--img
	{
		transition: opacity .5s ease;
		opacity: 1;
		z-index: -1;
	}
	.av-content-card:hover .av-content-card--img img
	{
		transition: scale .5s ease;
		scale: 1.1;
	}
	.av-content-card
	{
		position: relative;
		overflow: hidden;
	}
	.av-content-card--img
	{
		overflow: hidden;
		opacity: 0;
		position: absolute;
		top: 0;
    left: 0;
    width: 100%;
    z-index: 0;
    height: 100%;
	}
	.av-content-card--img img
	{
		object-fit: cover;
	}
	.av-content-card__top
	{
		z-index: 1;
		position: relative;
	}
	.av-content-card__bottom
	{
		z-index: 1;
		position: relative;
	}
</style>
