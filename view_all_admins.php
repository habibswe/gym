<!DOCTYPE html>
<html>
<head>
	<title>MyGym | All Admins</title>
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
					<center><label style="color: white;"><h1>Gym and Fitness | All Admins</h1></label></center>

					<table border="2" align="center" width="714px" style="color:white; background-color: black; border-color: white;">
						<tr align="center">
							<td colspan="3"><h2></h2><br></td>
						</tr>
						<tr>
							<th><h2>Admin's Name</h2></th>
							<th><h2>Admin's E-mail</h2></th>
							<th><h2>Admin's Mobile Number</h2></th>
						</tr>

						<?php

						require_once "connection.php";

						$sql = "SELECT * FROM admin";

						$result = $conn->query($sql);

						if($result->num_rows>0)
						{
							while ($row_user = $result->fetch_assoc())
							{
								echo "<tr>
										<th>" . $row_user['name'] . "</th>
										<th>" . $row_user['email'] ."</th>
										<th>+880 " . $row_user['mobile'] . "</th>
									</tr>";
							}
						}
						else
						{
							echo "No information available";
						}

						?>
					</table>

					<br><br>

					<a href="admins_button.php"><button>Back</button></a>

				</div>
			</div>
		</div>

		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="#">HABIB</a></h5>
		</div>

	</div>

</body>
</html>