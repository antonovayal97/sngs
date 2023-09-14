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



<div class="news-content">
	<div class="news-content-left">
		<div class="swiper news-swiper">
			<div class="swiper-wrapper news-swiper-wrapper">


			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<?if ($key < 3) {?>

				<div class="swiper-slide news-swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-swiper-content">
						<div class="news-swiper-img">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
						</div>
						<span class="news-swiper-data">
						<?
							$arParams["DATE_CREATE"]="j F Y";
							echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat()));
							?>
						</span>
						<span class="news-swiper-bottom">
							<span class="news-swiper-title"><?=$arItem["NAME"]?></span>
							<span class="news-swiper-bottom-link">
								<span class="news-swiper-link">Подробнее</span>
								<svg class="icon icon-smallvectortoright smallvectortoright__icon">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#smallvectortoright" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#smallvectortoright"></use>
								</svg>
							</span>
						</span>
				</a>
				</div>
				<?}?>
			<?endforeach;?>






			</div>
			<div class="news-swiper-scrollbar">
			<!--.swiper-scrollbar-drag.news-drag-->
			</div>
		</div>
	</div>
	<div class="news-content-right">


	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 284, "height" => 220), BX_RESIZE_IMAGE_EXACT, false);
				?>
					<?if ($key >= 3) {?>

					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-content-right-cards" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="news-content-right-cards--img">
							<img src="<?=$renderImage["src"]?>" alt="<?=$arItem["NAME"]?>">
						</div>
						<div class="news-content-right-cards--data">
							<span>
							<?
									$arParams["DATE_CREATE"]="j F Y";
									echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat()));
									?>
							</span>
						</div>
						<div class="news-content-right-cards--desc">
							<span><?=$arItem["NAME"]?></span>
						</div>
						<span class="news-content-right-cards--bottom news-swiper-bottom-link">
							<span class="news-swiper-link">Подробнее</span>
							<svg class="icon icon-smallvectortoright smallvectortoright__icon">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#smallvectortoright" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#smallvectortoright"></use>
							</svg>
						</span>
					</a>


					<?}?>
				<?endforeach;?>






	</div>
</div>