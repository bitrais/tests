<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="news-list">
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="news-item-good" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
				<div class="news-date"><?= $arItem["DISPLAY_ACTIVE_FROM"]; ?></div>
			<?endif?>
			<div class="news-title"><?= $arItem["NAME"]; ?></div>
			<div class="news-detail"><?= $arItem["PREVIEW_TEXT"]; ?></div>
		</div>
	<?endforeach;?>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>