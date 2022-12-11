<?php

require_once "connection.php";

$t_id = $_POST["up_trainer_id"];
$t_name = $_POST["up_trainer_name"];
$e_id = $_POST["up_trainer_exercise_id"];
$t_mobile = $_POST["up_trainer_mobile"];

$similar_id = "SELECT * FROM trainer WHERE t_id='$t_id'";
 
$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);


if($row_count==1)
{
	$sql = "UPDATE trainer SET t_name='$t_name', e_id='$e_id', t_mobile='$t_mobile' WHERE t_id='$t_id'";

	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Trainer information updated successfully!')</script>";
		echo "<script>window.open('trainers_button.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Failed! Please try again later.')</script>";
		echo "<script>window.open('update_trainer_info.php','_self')</script>";
	}

}
else
{
    echo "<script>alert('Invalid ID! Please, try again.')</script>";
    echo "<script>window.open('update_trainer_info.php','_self')</script>";
}

mysqli_close($conn);

?>