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



<div class="zakupochnyyeprotsedury-content">
	<div class="zakupochnyyeprotsedury-body">  
		<table class="zakupochnyyeprotsedury-table main-table another-table">
		<tr>
			<td>№</td>
			<td>Способ закупки</td>
			<td>Наименование закупки</td>
			<td>Документы</td>
		</tr>
		<?function pathinfo_utf($path) {

if (strpos($path, '/') !== false)
$basename = end(explode('/', $path));
elseif (strpos($path, '\\') !== false)
$basename = end(explode('\\', $path));
else
return false;

if (!$basename)
return false;

$dirname = substr($path, 0,
strlen($path) - strlen($basename) - 1);

if (strpos($basename, '.') !== false) {
	$extension = end(explode('.', $path));
	$filename = substr($basename, 0,
	strlen($basename) - strlen($extension) - 1);
} else {
	$extension = '';
	$filename = $basename;
}
$result = $filename.'.'.$extension;
return $result;
}?>
<?foreach($arResult["ITEMS"] as $arItem){?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
		<tr class="grid-container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<td class="block1"><?=$arItem["CODE"]?></td>
			<td class="block2"><?=$arItem["DISPLAY_PROPERTIES"]["SPOSOB_ZAKUPKI"]["VALUE"]?></td>
			<td class="block3"><?=$arItem["NAME"]?></td>
			<td class="block4"> <span class="zakupochnyyeprotsedury-table-btn"><span>Показать</span>
				<svg class="icon icon-chevron-up chevron-up__icons">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#chevron-up"></use>
				</svg></span></td>
			<td class="block5">
			<div class="zakupochnyyeprotsedury-table--line"> </div>
			<div class="zakupochnyyeprotsedury-table--line-content">
				<div class="uchreditelnyyedokumenty-content antimonopolnyykomplayens-content">


				<?foreach($arItem["DISPLAY_PROPERTIES"]["DOCUMENTS"]["VALUE"] as $code=>$value){?>
<div class="antimonopolnyykomplayens-target--list--dowload">
	<a href="<?=$value?>" download><?=pathinfo_utf($value)?></a>
</div>
								<?}?>


				</div>
			</div>
			</td>
		</tr>
<?
}
?>



		</table>
	</div>
	<!-- <div class="zakupochnyyeprotsedury-pagination">
		<div class="zakupochnyyeprotsedury-pagination--left">
		<label class="zakupochnyyeprotsedury-pagination--left-label" for="zakupochnyyeprotsedury-pagination--left">Показывать по:
			<select class="zakupochnyyeprotsedury-pagination--left-selector" name="zakupochnyyeprotsedury-pagination--left" id="zakupochnyyeprotsedury-pagination--left"> 
			<option value="2019">5</option>
			<option value="2020">10</option>
			<option value="2021">15</option>
			<option class="asdasd" value="2023" selected="selected">20</option>
			</select>
		</label><span>
			<svg class="icon icon-chevron-down chevron-down__select-icon">
			<use xlink:href="/img/svg/sprite.svg#chevron-down"></use>
			</svg></span>
		</div>
		<div class="zakupochnyyeprotsedury-pagination--right">
		<div class="zakupochnyyeprotsedury-pagination--right--back"><a>Пред </a></div>
		<div class="zakupochnyyeprotsedury-pagination--right--links">
			<ul>
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
			<li><a>4</a></li>
			<li><a>5</a></li>
			</ul>
		</div>
		<div class="zakupochnyyeprotsedury-pagination--right--next"><a>След</a></div>
		<div class="zakupochnyyeprotsedury-pagination--right--end"><a>В конец</a></div>
		</div>
	</div> -->
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>











