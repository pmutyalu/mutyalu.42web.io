<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/thumbnails/007/033/146/small/profile-icon-login-head-icon-vector.jpg">

  <style>
body {
	background-image: url('login.jpeg');
	background-size: 100%;
	background-position: center;
}
</style>
</head>
<body>

<?php include('errors.php'); ?>
<br>
  <div class="header">
  	<h2>Login </h2>
  </div>
	 
  <form method="post" action="login.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter your Username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter your password">
  	</div><center>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? 
		<br>
		<a href="register.php">Sign up</a> here
  	</p></center>
  </form>
</body>
</html>