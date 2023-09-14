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
<div class="wrapper default-block">
	<div class="column" style="width:100%">
		<iframe src="https://tender.otc.ru/sahaneftegazsbyt/otc.html" style="height: 1500px; width: 100%" frameborder="0" id="iframe"></iframe>
		<? /*
		<div class="accordion-header">
			<div class="td">
				Дата размещения объявлений
			</div>
			<div class="td">
				Наименование закупки
			</div>
			<div class="td">
				Документы
			</div>
		</div>
		<ul class="accordion" data-responsive-accordion-tabs="accordion medium-tabs large-accordion" data-allow-all-closed="true">
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
			<?if($arParams["DISPLAY_TOP_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?><br />
			<?endif;?>
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<li class="accordion-item new_table" data-accordion-item="" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<a href="#" class="accordion-item__stroke accordion-title">
					<div class="td">
						<?echo FormatDate('d.m.Y', MakeTimeStamp($arItem["DISPLAY_ACTIVE_FROM"]))?>
					</div>
					<div class="td" style="justify-content: center;">
						<?echo FormatDate('d.m.Y', MakeTimeStamp($arItem["DATE_ACTIVE_TO"]))?>
					</div>
					<div class="td">
						<?=$arItem["NAME"]?>
					</div>
					<div class="td">

					</div>
				</a>
				<div class="accordion-content" data-tab-content="">
					<div class="accordion-item__stroke">
						<div class="td">
							<i class="file-icon"></i>
						</div>
						<div class="td-full">
							<?foreach($arItem["DISPLAY_PROPERTIES"]["DOCUMENTS"]["VALUE"] as $code=>$value){?>
								<a href="<?=$value?>" class="link"><?=pathinfo_utf($value)?></a>
							<?}?>
						</div>
					</div>

					<div class="accordion-item__stroke tables__wrapper" style="display: none;">
						<table>
						    <tbody>
								<? /*foreach ($arItem["DISPLAY_PROPERTIES"] as $item) :?>
							    <tr>
								    <td width="50%"><?=$item['NAME']?></td>
								    <td width="50%"><?=$item['VALUE']?></td>
							    </tr>
								<? endforeach; */ /*?>
						    </tbody>
						</table>
					</div>
				</div>

				</li>
				<?endforeach;?>
			</ul>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?> */ ?>
		</div>
	</div>
	<script>

window.onload = () => {
	let iframeName = document.getElementById("iframe");
    // создаём новый тег "link" для iFrame и заполняем его "href", "rel" и "type"
    let iframeLink = document.createElement("link");

    iframeLink.href = "fileName.css"; // css файл для iFrame
    iframeLink.rel = "stylesheet";
    iframeLink.type = "text/css";

    // вставляем в [0] - индекс iframe
    frames[0].document.head.appendChild(iframeLink);
}
</script>