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
          <a class="navbar-brand" href="<?php echo RW(0)?>"><?php echo $d['layout']['site_brand']?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php getWidget('default/mk-menu-default',array('smenu'=>'0','limit'=>'2','dropdown'=>'1','dispfmenu'=>'1','link'=>'bookmark'))?>
          </ul>

          <?php if(!$my['uid']):?>
          <form class="navbar-form navbar-right"  name="LayoutLogForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return layoutLogCheck(this);" role="form">
            <input type="hidden" name="r" value="<?php echo $r?>">
            <input type="hidden" name="a" value="login">
            <input type="hidden" name="referer" value="<?php echo $referer ? $referer : $_SERVER['HTTP_REFERER']?>">
            <div class="form-group">
              <input type="text" name="id" value="" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="pw" value="" placeholder="Password" class="form-control" >
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          <?php else:?>

          <p class="navbar-text navbar-right">Signed in as <span class="glyphicon glyphicon-user"></span> <?php echo $my[$_HS['nametype']]?> <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout" class="navbar-link">Logout</a></p>

          <?php endif?>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">

      <?php include __KIMS_CONTENT__ ?>
      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
      
    </div><!-- /.container -->

    <?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
  </body>
</html>
