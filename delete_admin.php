<?php
	session_start();
	require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyGym | Delete Admin</title>
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
					<center><label style="color: white;"><h1>Gym and Fitness | Delete Admin</h1></label></center>

					<form action="delete_admin_done.php" method="post">
						<br><br><br>

    					<center><label style="color:white; background-color: black;">Select Question</label></center>
    					<select name="delete_admin_select_ques" id="rp_select_ques">
      						<option value="" selected>~~ Please choose an option ~~</option>
      						<option value="Where is your birth place?">Where is your birth place?</option>
      						<option value="What is your favourite food?">What is your favourite food?</option>
    					</select>

    					<center><label style="color:white; background-color: black;">Your Answer</label></center>
    					<input type="text" placeholder="Your Answer" name="delete_your_ans">

   						<center><label style="color:white; background-color: black;">Password</label></center>
    					<input type="password" placeholder="********" name="admin_delete_pass"><br><br>

						<?php

  						require_once "connection.php";

						$a_email = $_POST["delete_admin_email"];

						$similar_email = "SELECT * FROM admin WHERE email='$a_email'";

						$run_user = mysqli_query($conn, $similar_email);

						$row_count = mysqli_num_rows($run_user);

						if ($row_count==1)
						{
							
						} 
						else
						{
							echo "<script>alert('Invalid Email')</script>";
							echo "<script>window.open('delete_admin_email.php','_self')</script>";
						}

						mysqli_close($conn);

  						?>

    					<input type="submit" name="reset_pass" value="Delete Admin"><br><br>
  					</form>
  					
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