<?php
if(!defined('__KIMS__')) exit;
 
$d['layout']['show'] = true;   /** 관리패널에 레이아웃 관리탭을 보여주기 **/
 

/***********************************************************************************
설정배열
***********************************************************************************/
 
$d['layout']['dom'] = array(
 
	/** 설정 종류(영문소문자) **/
	'site' => array(
		'Settings', /** 탭 명칭(한글/영문) **/
		'', /** 탭 메세지(생략시 공백) **/
		array(
			array('brand','input','Site Brand',''),
			array('theme','select','Theme','none=none,default=default'), /** 콤보박스 **/
		),
	),
 
 
	/** 도움말 **/
	'help' => array(
		'Guide',
		'<h4>Bootstrap-theme</h4>
		Load the optional Bootstrap theme for a visually enhanced experience.
		<hr>
		<h5>Source code</h5>
		<ul>
			<li><a href="https://github.com/twbs/bootstrap/tree/master/docs/examples/theme" target="_blank">Design template</a></li>
		 	<li><a href="https://github.com/kimsQ/rb2-examples-bootstrap/tree/develop/layouts/bootstrap-theme" target="_blank">Rb2 layout</a></li>
		 </ul>

		<h5>Demo</h5>
		<ul>
			<li><a href="http://getbootstrap.com/examples/theme/" target="_blank">Design template</a></li>
		 	<li><a href="http://demo.kimsq.com/rb2/bootstrap-theme/" target="_blank">Rb2 site</a></li>
		 </ul>

		<h5>Docs</h5>
		<ul>
		 	<li><a href="http://docs.kimsq.com/rb2/docs/c/examples/bootstrap-official/bootstrap-theme" target="_blank">Setting Guide</a></li>
		 </ul>',
		array(),
	),
);
 
//***********************************************************************************
?>