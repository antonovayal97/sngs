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
$YEARS = [];
?>

<?$arFilter = Array('IBLOCK_ID'=>$arResult['ID'], 'GLOBAL_ACTIVE'=>'Y', 'PROPERTY'=>Array('FILE_DOC'));
	$db_list = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true);
	while($ar_result = $db_list->GetNext()){
		$YEARS[$ar_result['ID']]["NAME"] = $ar_result['NAME'];
	}
	?>


<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	if (array_key_exists($arItem["IBLOCK_SECTION_ID"], $YEARS)) {
			
		$YEARS[$arItem["IBLOCK_SECTION_ID"]]["DOCS"][$key] = $arItem["PROPERTIES"]["FILE_DOC"];
		$YEARS[$arItem["IBLOCK_SECTION_ID"]]["DOCS"][$key]["NAME"] = $arItem["NAME"];
	}
		?>
<?endforeach;?>
<?
// echo "<pre>";
// echo print_r($YEARS);
// echo "</pre>";
?>
<div class="select-select">
	<label class="select-label" for="korporativnoyeupravleniye-botton--select">Год</label>
	<select class="select-selector" name="korporativnoyeupravleniye-botton--select" id="korporativnoyeupravleniye-botton--select-<?=$arResult['ID']?>"> 
		<option value="">Выберите год</option>
		<?
		foreach($YEARS as $year)
		{
		?>
		<option><?=$year["NAME"]?></option>
		<?
		}
		?>
	</select>
</div>
<div class="sedas">
<div class="years-docs years-docs-<?=$arResult['ID']?>" style="display: none">
	</div>
	<?
	foreach($YEARS as $year)
	{
	?>
	<div class="content years-docs years-docs-<?=$arResult['ID']?>" style="display: none">
		<?
		foreach($year["DOCS"] as $doc)
		{
		?>
		<a href="<?=$doc["VALUE"]?>"><?=$doc["NAME"]?></a>
		<?
		}
		?>
	</div>
	<?
	}
	?>
</div>


<script>

let select_<?=$arResult['ID']?> = document.getElementById('korporativnoyeupravleniye-botton--select-<?=$arResult['ID']?>');
let block_<?=$arResult['ID']?> = document.querySelectorAll('.years-docs-<?=$arResult['ID']?>');
let lastIndex_<?=$arResult['ID']?> = 0; // После каждой смены опции, сохраняем сюда индекс предыдущего блока

select_<?=$arResult['ID']?>.addEventListener('change', function() {
  block_<?=$arResult['ID']?>[lastIndex_<?=$arResult['ID']?>].style.display = "none"; 
  // Чтобы сразу делать именно его невидимым при следующей смене 

  let index_<?=$arResult['ID']?> = select_<?=$arResult['ID']?>.selectedIndex; // Определить индекс выбранной опции
  block_<?=$arResult['ID']?>[index_<?=$arResult['ID']?>].style.display = "block"; // Показать блок с соответствующим индексом

  lastIndex_<?=$arResult['ID']?> = index_<?=$arResult['ID']?>; // Обновить сохраненный индекс.
});
</script>
