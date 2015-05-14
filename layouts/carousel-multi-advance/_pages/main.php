<?php
include_once $g['path_module'].'mediaset/function.php';
$d['layout']['_slide'] = getArrayString($d['layout']['front_people']);
?>

<div class="row">
  <?php $_i=0;foreach($d['layout']['_slide']['data'] as $_tmp['uid']):?>
  <?php $_tmp['m']=getUidData($table['s_upload'],$_tmp['uid'])?>
  <div class="col-md-4">
    <img class="img-circle" src="<?php echo getMediaLink($_tmp['m'],0)?>" alt="<?php echo $_tmp['m']['alt']?>"  style="width: 140px; height: 140px;">
    <h2><?php echo $_tmp['m']['caption']?$_tmp['m']['caption']:'Caption 등록요함'?></h2>
    <p><?php echo $_tmp['m']['description']?$_tmp['m']['description']:'미디어셋에서 삽입한 사진의 등록정보에 Description 등록하면 이 곳에 출력됩니다'?></p>
    <?php if($_tmp['m']['linkurl']):?>
    <p><a class="btn btn-default" href="<?php echo $_tmp['m']['linkurl']?>"<?php if($_tmp['m']['linkto']=='3'):?> target="_blank"<?php endif?> role="button">자세히보기 &raquo;</a></p>
    <?php else:?>
    <?php endif?>
  </div>
  <?php $_i++;endforeach?>
</div>



<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
    <img class="img-thumbnail featurette-image img-responsive" src="<?php echo $g['img_layout']?>/blog/post-3-thumb.jpg" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-5">
    <img class="img-thumbnail featurette-image img-responsive" src="<?php echo $g['img_layout']?>/blog/post-5-thumb.jpg" alt="Generic placeholder image">
  </div>
  <div class="col-md-7">
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
    <img class="img-thumbnail featurette-image img-responsive" src="<?php echo $g['img_layout']?>/blog/post-7-thumb.jpg" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->