<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
  </head>

  <body>

    <?php if(!$my['uid']):?>

    <div class="container">
      <?php include $g['dir_layout'].'/_includes/signin.php' ?>
    </div> <!-- /container -->

    <?php else:?>

    <div class="container">

      <div class="page-header">
        <h1><?php echo $d['layout']['site_brand']?></h1>
      </div>

      <div class="text-center">
        <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout" class="btn btn-default btn-lg">Logout</a></h1>
      </div>

    </div>

    <?php endif?>

    <?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
  </body>
</html>
