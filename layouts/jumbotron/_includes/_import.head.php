<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo strip_tags($g['meta_des'])?>">
<meta name="author" content="">
<link rel="icon" href="<?php echo $g['img_layout']?>/favicon.ico">

<title><?php echo $g['browtitle']?></title>

<!-- Bootstrap core CSS -->
<?php getImport('bootstrap','css/bootstrap.min',false,'css')?>

<?php if ($d['layout']['site_theme']!== "none") :?>
<!-- Bootstrap theme -->
<link href="<?php echo $g['url_layout']?>/_css/theme/<?php echo $d['layout']['site_theme']?>/bootstrap-theme.min.css" rel="stylesheet">
<?php endif?>

<!-- Custom styles for this template -->
<link href="<?php echo $g['url_layout']?>/_css/style.css" rel="stylesheet">
<link href="<?php echo $g['url_layout']?>/_css/custom.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="<?php echo $g['url_layout']?>/_js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?php echo $g['url_layout']?>/_js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- site head code -->
<?php echo $_HS['headercode']?>

<!-- Bootstrap core JavaScript -->
<?php getImport('jquery','jquery-'.$d['ov']['jquery'].'.min',false,'js')?>
<?php getImport('bootstrap','js/bootstrap.min',false,'js')?>

<!-- NOTICE!! Do not delete , 삭제하지마세요 -->
<?php include $g['path_core'].'engine/cssjs.engine.php'?>
