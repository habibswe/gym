<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyGym | Add Members</title>
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
					<form action="member_insert_data.php" method="post">
						<center><label style="color: white;"><h1>Gym and Fitness | Add Member</h1></label></center>

						<br>

						<center><label style="color:white; background-color: black;">Member ID</label></center>
						<input type="text" required = "required" placeholder="Name" id="add_member_id" name="add_member_id">

						<center><label style="color:white; background-color: black;"> Member Name</label></center>
						<input type="text" required = "required" placeholder="Name" id="add_member_name" name="add_member_name">

						<center><label style="color:white; background-color: black;">Member Age</label></center>
						<input type="text" required = "required" placeholder="Age must be 17+" id="add_member_age" name="add_member_age">

						<center><label style="color:white; background-color: black;">Member Weight</label></center>
						<input type="text" required = "required" placeholder="Weight" id="add_member_weight" name="add_member_weight">

						<center><label style="color:white; background-color: black;">Mobile Number No.</label></center>
						<input type="text" required = "required" placeholder="01XXXXXXXXX" id="add_member_mobile" name="add_member_mobile">

						<br><br>

						<input type="submit" name="add_member" value="Add Member"><br><br>
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