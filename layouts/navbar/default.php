<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-<?php if ($d['layout']['site_navbarInvert'] == "inverse") :?>inverse<?php else:?>default<?php endif?>" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo RW(0)?>"><?php echo $d['layout']['site_brand']?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <?php getWidget('default/mk-menu-default',array('smenu'=>'0','limit'=>'2','dropdown'=>'1','dispfmenu'=>'1'))?>

              <!-- Manually setting , 수동으로 메뉴구성 시 -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Default</a></li>
              <li><a href="#">Static top</a></li>
              <li><a href="#">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <?php include __KIMS_CONTENT__ ?>

    </div><!-- /.container -->

    <?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
  </body>
</html>
