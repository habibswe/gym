<?php

require_once "connection.php";

$t_id = $_POST["delete_trainer_id"];


$similar_id = "SELECT * FROM trainer WHERE t_id='$t_id'";

$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);

if ($row_count==1)
{
	$sql = "DELETE FROM trainer WHERE t_id='$t_id'";

	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Trainer Deleted successfully!')</script>";
		echo "<script>window.open('trainers_button.php','_self')</script>";
	}
}
else
{
	echo "<script>alert('Invalid ID')</script>";
	echo "<script>window.open('delete_trainer.php','_self')</script>";
}

mysqli_close($conn);

?>