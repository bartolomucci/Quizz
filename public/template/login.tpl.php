<?php require 'partials/_top.php'; ?>

<h1>Login</h1>

<form action="post/checkAdmin.php" method="POST">
<div class="form-group row">
    <label for="staticUsername">Username</label>
    <div class="col-sm-10">
      <input type="text" id="staticUsername" name="username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword">Password</label>
    <div class="col-sm-10">
      <input type="password" id="inputPassword" name="password">
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-10">
  <input class="btn btn-secondary text-center" type="submit" name="submit" value="Sign In">
  </div>
</form>

<?php require 'partials/_bottom.php'; ?>