<?php

require_once "connection.php";

$t_id = $_POST["search_trainer_id"];

$similar_id = "SELECT * FROM trainer WHERE t_id='$t_id'";

$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);

if ($row_count==0)
{
	echo "<script>alert('Invalid ID')</script>";
	echo "<script>window.open('search_trainer.php','_self')</script>";
}

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

					<br>

					<table border="2" align="center" width="714px" style="color:white; background-color: black; border-color: white;">
						<tr align="center">
							<td colspan="5"><h2></h2><br></td>
						</tr>
						
						<tr>
							<th><h2>ID</h2></th>
							<th><h2>Name</h2></th>
							<th><h2>Train Area</h2></th>
							<th><h2>Time Slot</h2></th>
							<th><h2>Mobile</h2></th>
						</tr>

						<?php

						$sql = "SELECT trainer.t_id, trainer.t_name, trainer.t_mobile, exercises.e_name, exercises.e_time FROM trainer INNER JOIN exercises ON trainer.e_id = exercises.e_id AND trainer.t_id = '$t_id'";

						$result = $conn->query($sql);

						if($row_user = $result->fetch_array())
						{
							echo "<tr>
									<th>" . $row_user['t_id'] . "</th>
									<th>" . $row_user['t_name'] ."</th>
									<th>" . $row_user['e_name'] ."</th>
									<th>" . $row_user['e_time'] ."</th>
									<th>+880 " . $row_user['t_mobile'] . "</th>
								</tr>";							
						}

						?>

					</table>

					<br><br>

					<a href="search_trainer.php"><button>Back</button></a>

				</div>
			</div>
		</div>

		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="#">HABIB</a></h5>
		</div>

	</div>

</body>
</html>