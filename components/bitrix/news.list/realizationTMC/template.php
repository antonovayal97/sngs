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


<div class="rnait-content">
<?foreach($arResult["ITEMS"] as $key => $arItem){?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
      <div class="rnait-line"></div>
  <div class="rnait-card">
    <div class="korporativnoyeupravleniye-title reglamentiruyushchiyedokumenty-title uslugi-sections rnait-card--title"><span><?=$arItem["PROPERTIES"]["RNA_NAME_TC"]["VALUE"]?></span></div>
    <div class="rnait-card-description">
      <div class="rnait-card-year rnait-card-item"><span>Год выпуска</span><span><?=$arItem["PROPERTIES"]["RNA_YEAR"]["VALUE"]?></span></div>
      <div class="rnait-card-location rnait-card-item"><span>Местонахождение</span><span><?=$arItem["PROPERTIES"]["RNA_GEO"]["VALUE"]["TEXT"]?></span></div>
      <div class="rnait-card-character rnait-card-item"><span>Характеристика</span><span><?=$arItem["PROPERTIES"]["RNA_DESCR"]["VALUE"]["TEXT"]?></span></div>
      <div class="rnait-card-contact rnait-card-item"><span>Контактное лицо</span><span><?=$arItem["PROPERTIES"]["RNA_CONTACTS"]["VALUE"]["TEXT"]?></span></div>
    </div>
    <div class="rnait-card-price">
      <?if($arItem["PROPERTIES"]["RNA_MONEY"]["VALUE"] != ''){?>
      <span>Цена:</span><span><?=$arItem["PROPERTIES"]["RNA_MONEY"]["VALUE"]?> ₽</span>
      <?
      }
      ?>
    </div>
    <div class="rnait-card-imgs">

      <?foreach($arItem["PROPERTIES"]["RNA_PHOTO"]["VALUE"] as $arRnaPhoto):?>
        <a href="<?=CFile::GetPath($arRnaPhoto)?>" data-fancybox="<?=$key?>">
        <img src="<?=CFile::GetPath($arRnaPhoto)?>" alt="">
        </a>
      <?endforeach?>
    </div>
  </div>

<?
}
?>


</div>

<script>
  Fancybox.bind("[data-fancybox]", {
  // Your custom options
});
</script>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<br /><?=$arResult["NAV_STRING"]?>
		<?endif;?>




