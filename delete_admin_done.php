<?php

require_once "connection.php";

$ques = $_POST["delete_admin_select_ques"];
$ans = $_POST["delete_your_ans"];
$pass = $_POST["admin_delete_pass"];

$info = "DELETE FROM admin WHERE question='$ques' AND answer='$ans' AND password='$pass'";

if (mysqli_query($conn, $info))
{
	echo "<script>alert('Deleted successfully')</script>";
	echo "<script>window.open('admins_button.php','_self')</script>";
}
else
{
	echo "<script>alert('Invalid ID')</script>";
	echo "<script>window.open('delete_admin.php','_self')</script>";
}

mysqli_close($conn);

?>