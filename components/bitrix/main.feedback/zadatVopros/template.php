<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
	{
		ShowError($v);
	}

		?>
		
		<div class="zadatvopros-content">
	<form action="" method="POST" class="zadatvopros--form"> 
	<?=bitrix_sessid_post()?>
		<div class="zadatvopros--form-input">
		<input placeholder="Ваше имя" required type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
		</div>
		<div class="zadatvopros--form-input" style="margin-bottom: 30px">  
		<input placeholder="Ваш e-mail" required type="email" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
		</div>
		<label class="zadatvopros--form-label" for="message"> Текст сообщения</label>
		<textarea placeholder="Введите ваше сообщение" id="message" required name="MESSAGE" resize="none" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>

		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="field mf-captcha">
		<label class="field-title"><?=GetMessage("MFT_CAPTCHA")?></label>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
	</div>
	<div class="field">
		<label class="field-title"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></label>
		<div class="form-input"><input type="text" name="captcha_word" size="30" maxlength="50" value=""  style="width:auto;"></div>
	</div>
	<?endif;?>

		<?$APPLICATION->IncludeComponent(
	"bitrix:main.userconsent.request",
	"soglasie",
	Array(
		"AUTO_SAVE" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"ID" => "1",
		"IS_CHECKED" => "Y",
		"IS_LOADED" => "Y"
	)
);?>
			<input class="button btn-main-btn send-btn" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
	</form>
</div>
		<?
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="zad-ok"><?=$arResult["OK_MESSAGE"]?></div><?
}
else
{
	?>
	
	
	<div class="zadatvopros-content">
	<form action="" method="POST" class="zadatvopros--form"> 
	<?=bitrix_sessid_post()?>
		<div class="zadatvopros--form-input">
		<input placeholder="Ваше имя" required type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
		</div>
		<div class="zadatvopros--form-input" style="margin-bottom: 30px">  
		<input placeholder="Ваш e-mail" required type="email" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
		</div>
		<label class="zadatvopros--form-label" for="message"> Текст сообщения</label>
		<textarea placeholder="Введите ваше сообщение" id="message" required name="MESSAGE" resize="none" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>

		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="field mf-captcha">
		<label class="field-title"><?=GetMessage("MFT_CAPTCHA")?></label>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
	</div>
	<div class="field">
		<label class="field-title"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></label>
		<div class="form-input"><input type="text" name="captcha_word" size="30" maxlength="50" value=""  style="width:auto;"></div>
	</div>
	<?endif;?>

		<?$APPLICATION->IncludeComponent(
	"bitrix:main.userconsent.request",
	"soglasie",
	Array(
		"AUTO_SAVE" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"ID" => "1",
		"IS_CHECKED" => "Y",
		"IS_LOADED" => "Y"
	)
);?>
			<input class="button btn-main-btn send-btn" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
	</form>
</div>
	
	<?
}
?>



<style>
.send-btn
{
	font-weight: 500;
    font-size: 20px;
    line-height: 100%;
    color: white;
	border: none;
	cursor: pointer;
}
.zadatvopros--form .zadatvopros--form-input:nth-child(2n)
{
	margin-bottom: 0;
}
.zad-ok
{
	font-size: 18px;
	color: green;
	font-weight: 500;
}
</style>