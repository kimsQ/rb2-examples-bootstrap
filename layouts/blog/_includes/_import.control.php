<?php
include $g['dir_layout'].'/_var/_var.php';

// 레이아웃 내장 위젯 불러오기
function getWidget_layout($widget,$wdgvar)
{
	global $DB_CONNECT,$table,$date,$my,$r,$s,$m,$g,$d,$c,$mod,$_HH,$_HD,$_HS,$_HM,$_HP,$_CA;
	static $wcsswjsc;
	if (!is_file($g['wdgcod']) && !strpos('_'.$wcsswjsc,'['.$widget.']'))
	{
		$wcss = $g['path_widget'].$widget.'/main.css';
		$wjsc = $g['path_widget'].$widget.'/main.js';
		if (is_file($wcss)) $g['widget_cssjs'] .= '<link href="'.$g['dir_layout'].'/widgets/'.$widget.'/main.css" rel="stylesheet">'."\n";
		if (is_file($wjsc)) $g['widget_cssjs'] .= '<script src="'.$g['dir_layout'].'/widgets/'.$widget.'/main.js"></script>'."\n";
		$wcsswjsc.='['.$widget.']';
	}
	$wdgvar['widget_id'] = str_replace('/','-',$widget);
	include $g['dir_layout'].'/widgets/'.$widget.'/main.php';
}
?>
