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

<div class="ruk-wrap">
	<div class="ruk-img">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
	</div>
	<div class="ruk-main">
		<div class="ruk-name">
			<h4><?=$arResult["NAME"]?></h4>
		</div>
		<div class="ruk-dolzh">
			<span><?=$arResult["PREVIEW_TEXT"];?></span>
		</div>
		<div class="ruk-content">
			<?=$arResult["DETAIL_TEXT"];?>
		</div>
	</div>
</div>

<style>
	.ruk-wrap
	{
		display: flex;
		gap: 40px;
	}
	.ruk-img
	{
		flex: 1;
		height: 400px;
	}
	.ruk-main
	{
		flex: 1;
	}
	.ruk-name h4
	{
		margin-bottom: 10px;
	}
	.ruk-dolzh
	{
		font-family: 'Roboto';
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 150%;
		color: #B8B8B8;
		margin-bottom: 30px;
	}
	.ruk-content h6
	{
		font-family: 'Roboto';
		font-style: normal;
		font-weight: 500;
		font-size: 22px;
		line-height: 150%;
		color: #0078D2;
	}

	@media (max-width: 1200px)
	{
		.ruk-wrap
	{
		display: block;
	}
	.ruk-img
	{
		width: 100%;
		height: 600px;
		margin-bottom: 40px;
	}
	.ruk-main
	{
		flex: 1;
	}
	.ruk-name
	{

	}
	.ruk-dolzh
	{

	}
	.ruk-content h6
	{
		font-family: 'Roboto';
		font-style: normal;
		font-weight: 400;
		font-size: 22px;
		line-height: 150%;
	}
	}
</style>