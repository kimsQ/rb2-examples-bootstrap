<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
  </head>
	
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo RW(0)?>">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li<?php if(!$c):?> class="active"<?php endif?>><a href="<?php echo RW(0)?>">Home</a></li>
            <?php getWidget('default/mk-menu-default',array('smenu'=>'0','limit'=>'2','dropdown'=>'1','dispfmenu'=>'1'))?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

    	<?php include __KIMS_CONTENT__ ?>

    </div><!-- /.container -->

    <?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
  </body>
</html>
