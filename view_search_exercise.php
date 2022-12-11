<?php

require_once "connection.php";

$e_id = $_POST["search_exercise_id"];

$similar_id = "SELECT * FROM exercises WHERE e_id='$e_id'";

$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);

if ($row_count==0)
{
	echo "<script>alert('Invalid ID')</script>";
	echo "<script>window.open('search_exercise.php','_self')</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>MyGym | Search Exercise</title>
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
					<center><label style="color: white;"><h1>Gym and Fitness | Search Exercise</h1></label></center>

					<br>

					<table border="2" align="center" width="714px" style="color:white; background-color: black; border-color: white;">
						<tr align="center">
							<td colspan="3"><h2></h2><br></td>
						</tr>
						
						<tr>
							<th><h2>ID</h2></th>
							<th><h2>Name</h2></th>
							<th><h2>Time Slot</h2></th>
						</tr>

						<?php

						$sql = "SELECT * FROM exercises WHERE e_id = '$e_id'";

						$result = $conn->query($sql);

						if($row_user = $result->fetch_array())
						{
							echo "<tr>
									<th>" . $row_user['e_id'] . "</th>
									<th>" . $row_user['e_name'] ."</th>
									<th>" . $row_user['e_time'] ."</th>
								</tr>";						
						}
						
						?>
						
					</table>

					<br><br>

					<a href="search_exercise.php"><button>Back</button></a>

				</div>
			</div>
		</div>

		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="#">HABIB</a></h5>
		</div>

	</div>

</body>
</html>