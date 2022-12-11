<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyGym | Add Trainer</title>
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
					<form action="trainer_insert_data.php" method="post">
						<center><label style="color: white;"><h1>Gym and Fitness | Add Trainer</h1></label></center>

						<br><br><br>

						<center><label style="color:white; background-color: black;">ID</label></center>
						<input type="text" required = "required" placeholder="Name"name="add_trainer_id">

						<center><label style="color:white; background-color: black;">Name</label></center>
						<input type="text" required = "required" placeholder="Name" name="add_trainer_name">

						<center><label style="color:white; background-color: black;">Exercise ID</label></center>
						<select id="trainer_exercise_id" name="trainer_exercise_id">
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

						<center><label style="color:white; background-color: black;">Mobile Number No.</label></center>
						<input type="text" required = "required" placeholder="01XXXXXXXXX" id="add_member_mobile" name="add_trainer_mobile">

						<br><br>

						<input type="submit" name="add_trainer" value="Add Trainer"><br><br>
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