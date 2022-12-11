<?php

require_once "connection.php";

$name = $_POST["reg_name"];
$email = $_POST["reg_email"];
$mobile = $_POST["reg_mobile"];
$question = $_POST["reg_select_ques"];
$answer = $_POST["reg_your_ans"];
$password = $_POST["reg_pass"];
$confirm_password = $_POST["reg_con_pass"];

$same_email = "SELECT email FROM admin WHERE email='$email'";

$invalid_email = mysqli_query($conn, $same_email);

if($password == $confirm_password AND $invalid_email == TRUE)
{

	$sql = "INSERT INTO admin (name, email, mobile, question, answer, password) VALUES ('$name', '$email', '$mobile', '$question', '$answer', '$password')";

	if (mysqli_query($conn, $sql))
	{
  		echo "<script>alert('Admin Registration Successful! Please, Login')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	else
	{
  		echo "<script>alert('E-mail already registered! Please use another E-mail.')</script>";
  		echo "<script>window.open('admin_registration.php','_self')</script>";
	}
}
else
{
	echo "<script>alert('Password and confirm password must be same.')</script>";
	echo "<script>window.open('admin_registration.php','_self')</script>";
}

mysqli_close($conn);

?>