<?php

require_once "connection.php";

$e_id = $_POST["add_exercise_id"];
$e_name = $_POST["add_exercise_name"];
$e_time = $_POST["add_exercise_time"];

$sql = "INSERT INTO exercises (e_id, e_name, e_time) VALUES ('$e_id', '$e_name', '$e_time')";

if (mysqli_query($conn, $sql))
{
	echo "<script>alert('Exercise added successfully!')</script>";
	echo "<script>window.open('exercises_button.php','_self')</script>";
}
else
{
	echo "<script>alert('Failed! Please try again later.')</script>";
	echo "<script>window.open('add_exercises.php','_self')</script>";
}

mysqli_close($conn);

?>