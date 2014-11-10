<?php
if(!defined('__KIMS__')) exit;
 
$d['layout']['show'] = true;   /** 관리패널에 레이아웃 관리탭을 보여주기 **/
 

/***********************************************************************************
설정배열
***********************************************************************************/
 
$d['layout']['dom'] = array(
 
	/** 도움말 **/
	'help' => array(
		'Guide',
		'<h4>Bootstrap grid examples</h4>
		Multiple examples of grid layouts with all four tiers, nesting, and more.
		<hr>
		<h5>Source code</h5>
		<ul>
			<li><a href="https://github.com/twbs/bootstrap/tree/master/docs/examples/grid" target="_blank">Design template</a></li>
		 	<li><a href="https://github.com/kimsQ/rb2-examples-bootstrap/tree/master/layouts/grids" target="_blank">Rb2 layout</a></li>
		 </ul>

		<h5>Demo</h5>
		<ul>
			<li><a href="http://getbootstrap.com/examples/grid/" target="_blank">Design template</a></li>
		 	<li><a href="http://demo.kimsq.com/rb2/grids/" target="_blank">Rb2 site</a></li>
		 </ul>

		<h5>Docs</h5>
		<ul>
		 	<li><a href="http://docs.kimsq.com/rb2/docs/c/examples/bootstrap-official/grids" target="_blank">Setting Guide</a></li>
		 </ul>',
		array(),
	),
);
 
//***********************************************************************************
?>