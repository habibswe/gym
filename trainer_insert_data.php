<?php

require_once "connection.php";

$t_id = $_POST["add_trainer_id"];
$t_name = $_POST["add_trainer_name"];
$e_id = $_POST["trainer_exercise_id"];
$t_mobile = $_POST["add_trainer_mobile"];

$search_t_id = "SELECT * FROM trainer WHERE t_id ='$t_id'";

$get_id = mysqli_query($conn, $search_t_id);

$row_count_trainer = mysqli_num_rows($get_id);

if($row_count_trainer==0)
{
	$find_e_id = "SELECT * FROM exercises WHERE e_id = '$e_id'";

	$get_e_id = mysqli_query($conn, $find_e_id);

	$row_count_ex = mysqli_num_rows($get_e_id);

	if($row_count_ex==1)
	{
		$sql = "INSERT INTO trainer (t_id, t_name, e_id, t_mobile) VALUES ('$t_id', '$t_name', '$e_id', '$t_mobile')";

		if (mysqli_query($conn, $sql))
		{
			echo "<script>alert('Trainer added successfully!')</script>";
			echo "<script>window.open('trainers_button.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('Failed! Please try again later.')</script>";
			echo "<script>window.open('add_trainer.php','_self')</script>";
		}
	}
	else
	{
		echo "<script>alert('Invalid Exercise ID!')</script>";
		echo "<script>window.open('add_trainer.php','_self')</script>";
	}
}
else
{
	echo "<script>alert('Invalid ID! Please use another ID.')</script>";
	echo "<script>window.open('add_trainer.php','_self')</script>";
}

mysqli_close($conn);

?>