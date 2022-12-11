<?php

require_once "connection.php";

$a_email = $_POST["admin_email"];
$a_pass = $_POST["admin_pass"];

$similar_email = "SELECT * FROM admin WHERE email='$a_email'";
 
$run_user = mysqli_query($conn, $similar_email);

$row_count = mysqli_num_rows($run_user);

if ($row_count==1)
{
    $sql = "SELECT email, password FROM admin WHERE email = '$a_email' AND password = '$a_pass'";

    $result = $conn->query($sql);

    if($row_user = $result->fetch_array())
    {
        echo "<script>alert('Login Successful!')</script>";
        echo "<script>window.open('home.php','_self')</script>";                       
    }
    else
    {
        echo "<script>alert('Invalid Password! Please try again later.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
else
{
    echo "<script>alert('Invalid E-mail')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}

mysqli_close($conn);

?>