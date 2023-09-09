<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/thumbnails/007/033/146/small/profile-icon-login-head-icon-vector.jpg">
  <style>
body {
	background-image: url('2reg.jpeg');
	background-size: 110% 150%;
	background-position: center;
	height: 100%;
	background-repeat: no-repeat; 
}
</style>
</head>
<body>
<?php include('errors.php'); ?>

  <div class="header">
  	<h2>Registeration</h2>
  </div>
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Enter your Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter your Mail" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" placeholder="Enter your password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" placeholder="Enter your password Again" name="password_2">
  	</div>
	<center>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? 
		<br>
		<a href="login.php">Login</a>
  	</p>
  </form>
</body>
</html>