<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */

$config = \Bitrix\Main\Web\Json::encode($arResult['CONFIG']);
?>


<div class="zadatvopros--form-toggle">
	<label class="tumbler">  
		<div class="vakansii--modat--custom--footer-toggle">
			<input type="checkbox" id="switch" required value="Y" <?=($arParams['IS_CHECKED'] ? 'checked' : '')?>/>
			<label for="switch">Toggle</label>
		</div>
	</label>
	<span>Ознакомлен с <a>политикой обработки персональных данных АО “Саханефтегазсбыт”</a></span>
</div>




<!-- <label data-bx-user-consent="<?//=htmlspecialcharsbx($config)?>" class="main-user-consent-request">
	<input type="checkbox" value="Y" <?//=($arParams['IS_CHECKED'] ? 'checked' : '')?> name="<?//=htmlspecialcharsbx($arParams['INPUT_NAME'])?>">
	<span class="main-user-consent-request-announce"><?//=htmlspecialcharsbx($arResult['INPUT_LABEL'])?></span>
</label> -->