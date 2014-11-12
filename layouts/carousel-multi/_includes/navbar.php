<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
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
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li<?php if(!$c):?> class="active"<?php endif?>><a href="<?php echo RW(0)?>">Home</a></li>
        <?php getWidget('default/mk-menu-default',array('smenu'=>'0','limit'=>'2','dropdown'=>'1','dispfmenu'=>'1'))?>
      </ul>
    </div>
  </div>
</nav>