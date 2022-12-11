<?php
	session_start();
	require_once "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>MyGym | Search Trainer</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="styles/view_all_members.css" media="all" />
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
					<center><label style="color: white;"><h1>Gym and Fitness | Search Trainer</h1></label></center>

					<br><br><br><br><br><br><br><br>

					<form action="view_search_trainer.php" method="post">

						<br>

						<input type="text" required = "required" placeholder="Please Enter Trainer ID" name="search_trainer_id">

						<input type="submit" value="Search Trainer"><br><br>
					</form>

					<br>

					<a href="trainers_button.php"><button>Back</button></a>

				</div>
			</div>
		</div>

		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="#">HABIB</a></h5>
		</div>

	</div>

</body>
</html>