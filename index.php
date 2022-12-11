<?php
	session_start();
	require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyGym | Admin Login</title>
	<link rel="stylesheet" type="text/css" href="styles/admin_login.css">
</head>

<body style="background-image: url(images/admin_login.jpg)">
		
  	<h1 style="color:white; text-align:center;">Gym and Fitness</h1>

  	<hr>
		<h2 style="color:white; text-align:center;">** To be used by admin only **</h2>
  	<hr><br><br>

<div>
  	<form action="admin_login.php" method="post">
		<center><label style="color:white; font-size:30px; background-color: black;">Admin Login</label></center><br><br>

		<center><label style="color:white; background-color: black;">Email</label></center>
		<input type="email" required="required" placeholder="admin@gmail.com" name="admin_email">

		<center><label style="color:white; background-color: black;">Password</label></center>
		<input type="password" required="required" placeholder="********" name="admin_pass"><br><br>

		<input type="submit" name="submit" value="Login"><br><br>
  	</form>

  	<center><label style="color:white; background: black;">Forgot Password?</label></center>
  	<center><a href="admin_forgot_pass.php"><button style="background-color: orangered;" type="submit">Reset Password</button></a></center>

  	<center><label style="color:white; background: black;">Don't have any account?</label></center>
  	<center><a href="admin_registration.php"><button style="background-color: darkred;" type="submit">Admin Registration</button></a></center>

</div><br><br>

<div class="footer">
  	<h5 style="text-align:center; font-family: Verdana, Geneva, sans-serif; color: white;">&copy; 2022 all rights reserved | Developed By: <a href="#" style="color:white;">HABIB</a></h5>
</div>

</body>
</html>