<?php

require_once "connection.php";

$m_id = $_POST["delete_member_id"];


$similar_id = "SELECT * FROM member WHERE m_id='$m_id'";

$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);

if ($row_count==1)
{
	$sql = "DELETE FROM member WHERE m_id='$m_id'";

	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Deleted successfully')</script>";
		echo "<script>window.open('members_button.php','_self')</script>";
	}
}
else
{
	echo "<script>alert('Invalid ID')</script>";
	echo "<script>window.open('delete_member.php','_self')</script>";
}

mysqli_close($conn);

?>