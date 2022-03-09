<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\Loader::includeModule('iblock');

$dopNews = $elements = \Bitrix\Iblock\Elements\ElementDopnewsTable::getList([
	'order' => array('ACTIVE_FROM' => 'DESC', 'ID' => 'DESC'),
	'select' => ['ID', 'NAME', 'CODE', 'PREVIEW_TEXT', 'ACTIVE_FROM'],
	'filter' => ['=ACTIVE' => 'Y', '<=ACTIVE_FROM' => date("d.m.Y")],
	'limit' => 2,
	'cache'  => ['ttl' => 3600],
])->fetchAll();

$this->__component->arResult["DOP_NEWS"] = $dopNews;
$this->__component->SetResultCacheKeys(array("DOP_NEWS"));
?>