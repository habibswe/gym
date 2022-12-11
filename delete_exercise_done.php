<?php

require_once "connection.php";

$e_id = $_POST["delete_exercise_id"];


$similar_id = "SELECT * FROM exercises WHERE e_id='$e_id'";

$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);

if ($row_count==1)
{
	$sql = "DELETE FROM exercises WHERE e_id='$e_id'";

	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Exercise Deleted successfully!')</script>";
		echo "<script>window.open('exercises_button.php','_self')</script>";
	}
}
else
{
	echo "<script>alert('Invalid ID')</script>";
	echo "<script>window.open('delete_exercise.php','_self')</script>";
}

mysqli_close($conn);

?>