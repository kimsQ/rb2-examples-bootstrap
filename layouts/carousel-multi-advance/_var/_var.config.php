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
			array('navbarInvert','select','Navbar Invert','default=default,inverse=inverse'), /** 콤보박스 **/
			array('theme','select','Theme','none=none,default=default'), /** 콤보박스 **/
		),
	),
 
 	/* 프론트 */
	'front' => array(
		'메인 페이지',
		'프론트(메인화면)에 출력할 콘텐츠를 설정합니다. 미디어셋을 이용해서 프론트를 꾸며주세요.',
		array(
			array('slide','mediaset','메인 슬라이더',''),
			array('people','mediaset','팀소개',''),
		),
	),
 
	/** 도움말 **/
	'help' => array(
		'Guide',
		'<h4>Bootstrap Carousel multi Page Advance</h4>
		Build around the jumbotron with a navbar and some basic grid columns.

		<hr>
		<h5>Source code</h5>
		<ul>
			<li><a href="https://github.com/twbs/bootstrap/tree/master/docs/examples/carousel" target="_blank">Design template</a></li>
		 	<li><a href="https://github.com/kimsQ/rb2-examples-bootstrap/tree/master/layouts/carousel-multi-advance" target="_blank">Rb2 layout</a></li>
		 </ul>

		<h5>Demo</h5>
		<ul>
			<li><a href="http://getbootstrap.com/examples/carousel/" target="_blank">Design template</a></li>
		 	<li><a href="http://demo.kimsq.com/rb2/carousel-multi-advan/" target="_blank">Rb2 site</a></li>
		 </ul>

		<h5>Docs</h5>
		<ul>
		 	<li><a href="http://docs.kimsq.com/rb2/docs/c/examples/bootstrap-official/carousel-multi-advan" target="_blank">Setting Guide</a></li>
		 </ul>',
		array(),
	),
);
 
//***********************************************************************************
?>