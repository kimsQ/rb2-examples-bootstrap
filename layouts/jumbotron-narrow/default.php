<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
  </head>
	
  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li<?php if(!$c):?> class="active"<?php endif?>><a href="<?php echo RW(0)?>">Home</a></li>
          <?php getWidget('default/mk-menu-default',array('smenu'=>'0','limit'=>'2','dropdown'=>'1','dispfmenu'=>'1'))?>
        </ul>
        <h3 class="text-muted"><?php echo $d['layout']['site_brand']?></h3>
      </div>

      <?php include __KIMS_CONTENT__ ?>

      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

    </div><!-- /.container -->

    <?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
  </body>
</html>
