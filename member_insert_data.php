<?php

require_once "connection.php";

$m_id = $_POST["add_member_id"];
$m_name = $_POST["add_member_name"];
$m_age = $_POST["add_member_age"];
$m_weight = $_POST["add_member_weight"];
$m_mobile = $_POST["add_member_mobile"];

$sql = "INSERT INTO member (m_id, m_name, m_age, m_weight, m_mobile) VALUES ('$m_id', '$m_name', '$m_age', '$m_weight', '$m_mobile')";

if (mysqli_query($conn, $sql))
{
	echo "<script>alert('Member added successfully!')</script>";
	echo "<script>window.open('members_button.php','_self')</script>";
}
else
{
	echo "<script>alert('Failed! Please try again later.')</script>";
	echo "<script>window.open('add_member.php','_self')</script>";
}

mysqli_close($conn);

?>