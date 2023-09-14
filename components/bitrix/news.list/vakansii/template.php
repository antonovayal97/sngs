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



<div class="valansii-content">
	<form class="valansii">
		<div class="valansii-form-title">
			<span>Фильтрация</span>
		</div>
		<div class="valansii-form-selects">
			<span class="valansii-form-selects-block">
				<select class="valansii-form-selects--selected" id="vakFil">
					<option class="valansii-content--selectopt" selected value="null">Выберите филиал*</option>
					<?
					foreach($arResult["FILIALS"] as $filial)
					{
					?>
					<option value="<?=$filial["ID"]?>" <?if($_GET["filial"] == $filial["ID"]){echo "selected";}?>><?=$filial["NAME"]?></option>
					<?
					}
					?>
				</select>
				<svg class="icon icon-aass aass__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#aass" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#aass"></use>
				</svg>
			</span>
			<span class="valansii-form-selects-block">
				<select class="valansii-form-selects--selected" id="vakSft">
					<option value="null" selected="select">Выберите сферу труда*</option>
					<?
					foreach($arResult["SFERAS"] as $sfera)
					{
					?>
					<option value="<?=$sfera["ID"]?>" <?if($_GET["sfera"] == $sfera["ID"]){echo "selected";}?>><?=$sfera["NAME"]?></option>
					<?
					}
					?>
				</select>
				<svg class="icon icon-aass aass__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#aass" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#aass"></use>
				</svg>
			</span>
		</div>
	</form>
	<div class="valansii-cards">


<?
foreach($arResult["ITEMS"] as $item)
{
?>
		<div class="valansii-card">
			<div class="valansii-card--title">
				<span><?=$item["NAME"]?></span>
			</div>
			<div class="valansii-card--price">
				<span><?=$item["DISPLAY_PROPERTIES"]["ZARPLATA"]["VALUE"]?></span>
			</div>
			<div class="valansii-card--requirs">
				<span class="valansii-card--requirs--title">Требования</span>
				<span class="valansii-card--requirs--desc">
				<?=$item["PREVIEW_TEXT"]?>
			</span>
			</div>
			<div class="valansii-card--bottom">
				<div class="valansii-card--bottom--link">
					<span>Показать больше</span>
					<span class="aass__vak__icon-container">
						<svg class="icon icon-chevron-up aass__vak__icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#chevron-up" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#chevron-up"></use>
						</svg>
					</span>
				</div>
				<div class="valansii-card--bottom-content">
					<?=$item["DETAIL_TEXT"]?>
				</div>
				<?
					foreach($arResult["FILIALS"] as $filial)
					{
					if($filial["ID"] == $item['DISPLAY_PROPERTIES']['FILIAL']['VALUE'])
					{
						$filialName = $filial["NAME"];
						break;
					}
					else
					{
						$filialName = '';
					}
					}
					?>
				<button class="valansii-card--btn button demobuttons" data-hystmodal="#modalSimple" onclick="changeInputs('<?=$filialName;?>','<?=$item['NAME'];?>')"> <span>Откликнуться</span></button>
			</div>
		</div>
<?
}
?>


	</div>
</div>
<div class="pagen">
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>
<script>
	let filialInput = document.querySelector('#vakansii--modat--custom--input1')
	let vakInput = document.querySelector('#vakansii--modat--custom--input2')

	function changeInputs(fil,vak)
	{
		filialInput.value = fil;
		vakInput.value = vak;
	}
	const urlParams = new URLSearchParams(window.location.href);
	let filial = document.querySelector("#vakFil")
	let sfera = document.querySelector("#vakSft")
console.log(urlParams.get("sfera"))
console.log(urlParams.get("filial"))
	filial.addEventListener("change", () => {
			window.location = "/about/vakansii/" + "?filter=y" + "&filial=" + filial.value + "&sfera=" + urlParams.get("sfera")
	})
	sfera.addEventListener("change", () => {
			window.location = "/about/vakansii/" + "?filter=y" + "&filial=" + urlParams.get("filial") + "&sfera=" + sfera.value

	})
</script>
	<!--модальное окно 1-->
	<div class="hystmodal vakansii--modal--window" aria-hidden="true" id="modalSimple">
		<div class="hystmodal__wrap">
		<div class="hystmodal__window" role="dialog" aria-modal="true">
			<div class="hystmodal__styled">
			<h3 class="vakansii--modat--title">Отклик на вакансию</h3>
			<span class="vakansii--modat--subtitle">Оставьте ваши данные и мы с вами свяжемся</span>
			<div class="vakansii--modat--body">
				<form action="/about/vakansii/index.php" id="form1" method="post" enctype="multipart/form-data"> 

				
			<div class="vakansii--modat--custom-celect vakansii--modat--custom--input">
				<input type="text" id="vakansii--modat--custom--input1" required placeholder="Филиал*" name="filial">
				</div>
				<div class="vakansii--modat--custom-celect vakansii--modat--custom--input">
				<input type="text" id="vakansii--modat--custom--input2" required placeholder="Вакансия*" name="vaka">
				</div>
				<div class="vakansii--modat--custom-celect vakansii--modat--custom--input">
				<input type="text" id="vakansii--modat--custom--input3" required placeholder="Ваша фамилия*" name="f">
				</div>
				<div class="vakansii--modat--custom-celect vakansii--modat--custom--input">
				<input type="text" id="vakansii--modat--custom--input4" required placeholder="Ваше имя*" name="i">
				</div>
				<div class="vakansii--modat--custom-celect vakansii--modat--custom--input">
				<input type="text" id="vakansii--modat--custom--input5" required placeholder="Ваше отчество*" name="o">
				</div>
				<div class="vakansii--modat--custom-celect vakansii--modat--custom--input">
				<input type="tel" id="vakansii--modat--custom--input6" required placeholder="Ваш телефон*" name="phone">
				</div>
				<div class="vakansii--modat--custom-celect vakansii--modat--custom--input">
				<input type="email" id="vakansii--modat--custom--input7" required placeholder="Ваш e-mail*" name="email">
				</div>
				<input type="text" name="newVaka" value="ds" style="display: none">
				<div class="vakansii--modat--custom--dowload"><span>Загрузите резюме</span>
				<label style="cursor: pointer">
					<input type="file" name="doc" required>
					<svg class="icon icon-attach-file attach-file__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#attach-file" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#attach-file"></use>
					</svg><span>Прикрепить файл</span>
				</label>
				</div>
				<div class="vakansii--modat--custom--message"><span>Комментарий</span>
				<textarea style="resize:none" name="comment" required></textarea>
				</div>
				<div class="vakansii--modat--custom--footer">
				<div class="vakansii--modat--custom--footer-toggle"><input type="checkbox" id="switch" required /><label for="switch">Toggle</label></div><span class="vakansii--modat--custom--footer-message">Я согласен(а) на </span>
				</div>
				<div class="vakansii--modat--custom--footer--btn">
				<!-- <button type="submit" form="form1" value="asdasd" data-hystmodal="#modalSimpleAfterSubmit" >Откликнуться</button> -->
				<input type="submit" name="newVaka" value="Откликнуться" >
				</div>
			</div>
			<div data-hystclose>
				<svg class="icon icon-status5 status5__icon">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#status5" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#status5"></use>
				</svg>
			</div>
			</form>
			</div>
		</div>
		</div>
	</div>
	<!--модальное окно 2-->
	<div class="hystmodal vakansii--modal--window" aria-hidden="true" id="modalSimpleAfterSubmit">
		<div class="hystmodal__wrap">
		<div class="hystmodal__window" role="dialog" aria-modal="true">
			<div class="modalSimpleAfterSubmit__styled">
			<h3 class="vakansii--modat--title">Ваша заявка отправлена</h3><span class="vakansii--modat--subtitle">В скором времени мы с вами свяжемся</span>
			<div data-hystclose>
				<svg class="icon icon-status5 status5__icon">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#status5" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#status5"></use>
				</svg>
			</div>
			</div>
		</div>
	</div>
</div>

