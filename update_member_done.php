<?php

require_once "connection.php";

$m_id = $_POST["update_member_id"];
$m_name = $_POST["update_member_name"];
$m_age = $_POST["update_member_age"];
$m_weight = $_POST["update_member_weight"];
$m_mobile = $_POST["update_member_mobile"];

$similar_id = "SELECT * FROM member WHERE m_id='$m_id'";
 
$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);


if($row_count==1)
{
	$sql = "UPDATE member SET m_name='$m_name', m_age='$m_age', m_weight='$m_weight', m_mobile='$m_mobile' WHERE m_id='$m_id'";

	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Member information updated successfully!')</script>";
		echo "<script>window.open('members_button.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Failed! Please try again later.')</script>";
		echo "<script>window.open('update_member_info.php','_self')</script>";
	}

}
else
{
    echo "<script>alert('Invalid ID! Please, try again.')</script>";
    echo "<script>window.open('update_member_info.php','_self')</script>";
}

mysqli_close($conn);

?>