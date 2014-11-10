<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
  </head>
  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><?php echo $d['layout']['site_brand']?></h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#">Home</a></li>
                <?php getWidget('default/mk-menu-default',array('smenu'=>'0','limit'=>'2','dropdown'=>'1','dispfmenu'=>'1','link'=>'bookmark'))?>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
	
</body>
</html>
