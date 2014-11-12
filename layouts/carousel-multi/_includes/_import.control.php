<?php
include $g['dir_layout'].'/_var/_var.php';

// 레이아웃에 포함된 메인페이지에 home 레이아웃 적용
if (strstr($g['main'],$g['dir_layout']) && !$prelayout)
{
	$d['layout']['php'] = $d['layout']['dir'].'/home.php';
}

?>