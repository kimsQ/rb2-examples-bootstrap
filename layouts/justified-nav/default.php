<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted"><?php echo $d['layout']['site_brand']?></h3>
        <div role="navigation">
          <ul class="nav nav-justified">
            <li<?php if(!$c):?> class="active"<?php endif?>><a href="<?php echo RW(0)?>">Home</a></li>
            <!-- 레이아웃 내장 메뉴추출 위젯 -->
            <?php getWidget_layout('justified-nav',array('smenu'=>'0','limit'=>'1','link'=>'link',))?>
          </ul>
        </div>
      </div>

      <?php include __KIMS_CONTENT__ ?>
      
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

    </div> <!-- /container -->

    <?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
  </body>
</html>
