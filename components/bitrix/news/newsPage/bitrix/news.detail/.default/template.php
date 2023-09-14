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

<?
// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>";

?>

<section class="paddingtop80px">
<div class="page1-container">
<?

if($arResult["DETAIL_PICTURE"]["SRC"] != "" || $arResult["PREVIEW_PICTURE"]["SRC"] != "")
{
?>
	<div class="page1--image">
		<img src="<?if($arResult["DETAIL_PICTURE"]["SRC"] != ""){echo $arResult["DETAIL_PICTURE"]["SRC"];}else{echo $arResult["PREVIEW_PICTURE"]["SRC"];}?>" alt="">
	</div>
<?
}
?>
	<div class="page1--title">
		<span><?=$arResult["NAME"]?></span>
</div>
	<div class="content news__content">
	<p><?echo $arResult["PREVIEW_TEXT"];?></p>
	<?echo $arResult["DETAIL_TEXT"];?>
	</div>




	<?if($arResult['PROPERTIES']['PHOTOGALLERY']['VALUE'] != ''){?>




			<div class="page1--slider">
		<div class="swiper page1--swiper">
		<div class="swiper-wrapper page1--wrapper">
			<?foreach ($arResult['PROPERTIES']['PHOTOGALLERY']['VALUE'] as $element) {?>
				<a href="<?=$element?>" data-fancybox="gallary" class="swiper-slide page1--slide">
					<img src="<?=$element?>" alt="">
			</a>
				<?}?>
				</div>
		<div class="page1--swiper--btn">
			<!--.page1--slide-button-next-->
			<svg class="icon icon-Line2 line2__icon">
			<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#Line2" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#Line2"></use>
			</svg>
			<!--.page1--slide-button-prev-->
			<svg class="icon icon-Line1 line1__icon">
			<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#Line1" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#Line1"></use>
			</svg>
		</div>
		<div class="page1--pagination"></div>
		</div>
	</div>

	<script>
  Fancybox.bind("[data-fancybox]", {
  // Your custom options
});
</script>


<?}?>

	<?if($arResult['PROPERTIES']['YOUTUBE']['VALUE'] != ''){?>
			<div class="video_embed">
				<a href="<?=$arResult['PROPERTIES']['YOUTUBE']['VALUE']?>" target="_blank">
					Ссылка на видео в YouTube
				</a>
			</div>

				<?}?>
				<script src="https://yastatic.net/share2/share.js"></script>
				<div class="news-share">
					<div class="ya-share2" data-curtain data-size="l" data-services="vkontakte,odnoklassniki,telegram,whatsapp"></div>
				</div>
</div>








			<!-- <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
			<?endif;?>
			<div class="news-detail">

			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
			<h3><?=$arResult["NAME"]?></h3>
			<?endif;?>
			<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
			<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
			<?endif;?>
			<?if($arResult["NAV_RESULT"]):?>
			<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
			<?echo $arResult["NAV_TEXT"];?>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
			<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
			<?echo $arResult["DETAIL_TEXT"];?>
			<?else:?>

			<?endif?>
			<div style="clear:both"></div>
			<br />
			<?foreach($arResult["FIELDS"] as $code=>$value):
			if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
			{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
			?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
		}
	}
	else
	{
	?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
}
?><br />
<?endforeach;
foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

<?=$arProperty["NAME"]?>:&nbsp;
<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<?else:?>
<?=$arProperty["DISPLAY_VALUE"];?>
<?endif?>
<br />
<?endforeach;
if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
{
?>
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-curtain data-size="l" data-services="vkontakte,odnoklassniki,telegram,whatsapp"></div>
<?
}
?>
</div> -->

</section>