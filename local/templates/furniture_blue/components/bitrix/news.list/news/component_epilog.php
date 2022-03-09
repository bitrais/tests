<? foreach($arResult['DOP_NEWS'] as $arItem): ?>
	<div class="news-date"><?= FormatDate("d.m.Y", MakeTimeStamp($arItem['ACTIVE_FROM'])); ?></div>
	<div class="news-item-good">
		<div class="news-title"><?= $arItem["NAME"]; ?></div>
		<div class="news-detail"><?= $arItem["PREVIEW_TEXT"]; ?></div>
	</div>
<? endforeach; ?>
