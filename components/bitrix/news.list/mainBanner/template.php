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


<div class="mainslider" id="mainslider">
	<div class="swiper mySwiper">
		<div class="swiper-wrapper mySwiper-wrapper">



		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="swiper-slide main-swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<?=$arItem["PROPERTIES"]["CLICK_LINK"]["VALUE"]?>" class="slide-content">
				<img class="slide-img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
				<span class="slide-title"><?=$arItem['NAME']?></span>
				<span class="slide-subtitle"><?=$arItem['PREVIEW_TEXT']?></span>
			</a>
		</div>
		<?endforeach;?>




		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-scrollbar mainswiper-scrollbar"></div>
	</div>
</div>
