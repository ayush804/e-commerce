<?php
require 'includes\common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$pwd = mysqli_real_escape_string($con, (md5($_POST['password'])));
$login_query="SELECT id  FROM `users` WHERE `email` = '$email' AND `pwd` = '$pwd'";
$check_query= mysqli_query($con, $login_query) or die (mysqli_error($con));
$check_row= mysqli_num_rows($check_query);
if($check_row>=1)
{
    $row= mysqli_fetch_array($check_query);
    $_SESSION['email']=$email;
    $_SESSION['id']= $row['id'];
    header('location: products.php');
}
else
{
    $message = "Incorrect email or password.";
    echo "<script type='text/javascript'>alert('$message'); window.location='login.php';</script>";
}
?>