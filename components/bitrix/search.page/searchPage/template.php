<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
?>



<?
// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>";
?>
<div class="search-page" style="margin-top: 60px">

<h1 class="right-content-main--title">Результаты поиска</h1>
<div class="search--query">
	<span>
		Результаты по запросу «<?=$arResult["REQUEST"]["QUERY"];?>»
	</span>
</div>

<?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
<?elseif(count($arResult["SEARCH"])>0):?>

	<div class="search--results">

	<?foreach($arResult["SEARCH"] as $arItem):?>

		<a href="<?echo $arItem["URL"]?>" class="search--item">
		<div class="search--item-name">
			<span>
				<?=$arItem["TITLE_FORMATED"]?>
			</span>
		</div>
		<div class="search--item-body">
			<span>
				<?=$arItem["BODY_FORMATED"]?>
			</span>
		</div>
		
		</a>

	<?endforeach;?>

	</div>



	<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	<br>
<?else:?>
	<div class="search--not-found">
		<span><?=GetMessage("SEARCH_NOTHING_TO_FOUND");?></span>
	</div>

<?endif;?>
</div>


<style>
	.search-page
	{
		font-family: 'Roboto';
		font-style: normal;
		font-weight: 400;
		line-height: 150%;
		min-height: 100vh;
	}
	.search--query
	{
		font-size: 24px;
		margin-bottom: 30px;
	}
	.search--results
	{
		margin-bottom: 60px;
	}
	.search--item
	{
		display: block;
		margin: 15px 0;
		border-bottom: 1px solid #e7e7e7;
		padding-bottom: 15px;
	}
	.search--item-name
	{
		font-size: 20px;
		margin-bottom: 15px;
		font-weight: 500;
		color: #0078d2;
	}
	.search--item-body
	{

	}
	.search--not-found
	{
		color: #b1b1b1;
		font-weight: 500;
		font-size: 18px;
	}
</style>