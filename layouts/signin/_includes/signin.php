<form class="form-signin" name="LayoutLogForm" action="<?php echo $g['s']?>/" method="post" role="form">
  <input type="hidden" name="r" value="<?php echo $r?>">
  <input type="hidden" name="a" value="login">
  <input type="hidden" name="referer" value="<?php echo $referer ? $referer : $_SERVER['HTTP_REFERER']?>">

  <h2 class="form-signin-heading">Please sign in</h2>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="id" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',0)?>" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="pw" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',1)?>" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="idpwsave" value="checked" <?php if($_COOKIE['svshop']):?> checked<?php endif?>> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>