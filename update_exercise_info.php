<?php
	session_start();
	require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyGym | Update Exercise Information</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="styles/add_member.css" media="all" />
</head>
<body>
	<div class="wrapper">

		<div class="header">
			<a href="#"><img src="images/header.jpg"></a>
		</div>

		<div class="content_wrapper">
			<div class="right" style="background-image: url(images/right.jpg)">
				<div class="btn_hp">
					<br><br>

					<a href="home.php"><button>Home</button></a>
					<a href="members_button.php"><button>Members</button></a>
					<a href="trainers_button.php"><button>Trainers</button></a>
					<a href="exercises_button.php"><button>Exercises</button></a>
					<a href="admins_button.php"><button>Admins</button></a>
					<a href="index.php"><button>Logout</button></a>

				</div>
			</div>
			
			<div class="left" style="background-image: url(images/bg1.jpg)">
				<div class="middle">
					<form action="update_exercise_done.php" method="post">
						<center><label style="color: white;"><h1>Gym and Fitness | Update Exercise Information</h1></label></center>

						<br><br><br>

						<center><label style="color:white; background-color: black;">Exercise ID</label></center>
						<select id="exercise_id" name="exercise_id">
							<option value="" selected>~~ Please choose an option ~~</option>
						 	<option value="5001">5001</option>
						  	<option value="5002">5002</option>
						  	<option value="5003">5003</option>
						 	<option value="5004">5004</option>
						  	<option value="5005">5005</option>
						  	<option value="5006">5006</option>
						  	<option value="5007">5007</option>
						  	<option value="5008">5008</option>
						</select>

						<center><label style="color:white; background-color: black;">Exercise Name</label></center>
						<select id="exercise_name" name="exercise_name">
						  <option value="" selected>~~ Please choose an option ~~</option>
						  <option value="Barbell hip thrust">Barbell hip thrust</option>
						  <option value="Bench Press">Bench Press</option>
						  <option value="Deadlift">Deadlift</option>
						  <option value="Dumbbell romanian de">Dumbbell romanian de</option>
						  <option value="Farmer Walk">Farmer Walk</option>
						  <option value="Hamstring curl">Hamstring curl</option>
						  <option value="Pullup">Pullup</option>
						  <option value="Suspended inverted r">Suspended inverted r</option>
						</select>

						<center><label style="color:white; background-color: black;">Time Slot</label></center>
						<select id="exercise_time" name="exercise_time">
						  <option value="" selected>~~ Please choose an option ~~</option>
						  <option value="08 AM to 11 AM">08 AM to 11 AM</option>
						  <option value="11 AM to 02 PM">11 AM to 02 PM</option>
						  <option value="02 PM to 05 PM">02 PM to 05 PM</option>
						  <option value="05 PM to 08 PM">05 PM to 08 PM</option>
						  <option value="08 PM to 11 PM">08 PM to 11 PM</option>
						</select>

						<br><br>

						<input type="submit" name="update_member_info" value="Update Member's Information">
					</form>
				</div>
			</div>
		</div>

		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="#">HABIB</a></h5>
		</div>

	</div>

</body>
</html>