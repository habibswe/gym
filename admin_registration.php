<?php
	session_start();
	require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyGym | Admin Registration</title>
	<link rel="stylesheet" type="text/css" href="styles/admin_registration.css">
</head>

<body style="background-image: url(images/admin_registration.jpg)">
	
	<h1 style="color:white; text-align:center;">Gym and Fitness</h1>

	<hr>
		<h2 style="color:white; text-align:center;">** To be used by admin only **</h2>
	<hr><br><br>

<div>
	<form action="admin_insert_data.php" method="post">
		<center><label style="color:white; font-size:30px; background-color: black;">Admin Registration</label></center><br><br>

		<center><label style="color:white; background-color: black;">Name</label></center>
		<input type="text" required="required" placeholder="Name" name="reg_name">

		<center><label style="color:white; background-color: black;">Email</label></center>
		<input type="email" required="required" placeholder="admin@gmail.com" name="reg_email">

		<center><label style="color:white; background-color: black; background-color: black;">Mobile Number</label></center>
		<input type="text" required="required" placeholder="01XXXXXXXXX" name="reg_mobile">

		<center><label style="color:white; background-color: black;">Select Question</label></center>
		<select required="required" id="reg_select_ques" name="reg_select_ques">
			<option value="reg_choose_option" selected>~~ Please choose an option ~~</option>
			<option value="Where is your birth place?">Where is your birth place?</option>
			<option value="What is your favourite food?">What is your favourite food?</option>
		</select>

		<center><label style="color:white; background-color: black;">Your Answer</label></center>
		<input type="text"  required="required" placeholder="Your Answer" id="reg_your_ans" name="reg_your_ans">

		<center><label style="color:white; background-color: black;">Password</label></center>
		<input type="password" required="required" placeholder="********" id="reg_pass" name="reg_pass">

		<center><label style="color:white; background-color: black;">Confirm Password</label></center>
		<input type="password" required="required" placeholder="********" id="reg_con_pass" name="reg_con_pass"><br><br>

		<input type="submit" name="Admin_registration" value="Registration"><br><br>
	</form>
	
	<center><label style="color:white; background-color: black;">Have an account?</label></center>
	<center><a href="index.php"><button type="submit">Admin Login</button></a></center>
</div>

<div class="footer">
	<h5 style="text-align:center; font-family: Verdana, Geneva, sans-serif; color: white;">&copy; 2022 all rights reserved | Developed By: <a href="#" style="color:white;">HABIB</a></h5>
</div>

</body>
</html>