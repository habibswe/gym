<?php

require_once "connection.php";

$e_id = $_POST["exercise_id"];
$e_name = $_POST["exercise_name"];
$e_time = $_POST["exercise_time"];

$similar_id = "SELECT * FROM exercises WHERE e_id='$e_id'";
 
$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);


if($row_count==1)
{
	$sql = "UPDATE exercises SET e_name='$e_name', e_time='$e_time' WHERE e_id='$e_id'";

	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Exercise information updated successfully!')</script>";
		echo "<script>window.open('exercises_button.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Failed! Please try again later.')</script>";
		echo "<script>window.open('update_exercise_info.php','_self')</script>";
	}

}
else
{
    echo "<script>alert('Invalid ID! Please, try again.')</script>";
    echo "<script>window.open('update_exercise_info.php','_self')</script>";
}

mysqli_close($conn);

?>