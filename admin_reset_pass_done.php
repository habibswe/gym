<?php

require_once "connection.php";

$a_mail = $_POST["admin_email"];
$a_ques = $_POST["rp_select_ques"];
$a_ans = $_POST["rp_your_ans"];
$a_new_pass = $_POST["rp_new_password"];

$similar_mail = "SELECT * FROM admin WHERE email='$a_mail'";

$run_user = mysqli_query($conn, $similar_mail);

$row_count = mysqli_num_rows($run_user);

if ($row_count==1)
{
	$sql = "UPDATE admin SET password='$a_new_pass' WHERE email='$a_mail' AND question='$a_ques' AND answer='$a_ans'";

	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Password reset successfully! You can Login now.')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Invalid Answer!')</script>";
		echo "<script>window.open('admin_forgot_pass.php','_self')</script>";
	}
}
else
{
	echo "<script>alert('Invalid E-mail!')</script>";
	echo "<script>window.open('admin_forgot_pass.php','_self')</script>";
}

mysqli_close($conn);

?>