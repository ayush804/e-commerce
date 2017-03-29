<?php
require 'includes\common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$check="SELECT id  FROM users WHERE email = '$email'";
$check_submit= mysqli_query($con, $check) or die(mysqli_error($con));
$check_row= mysqli_num_rows($check_submit);
if($check_row>=1)
{
    $message = "A new password has been set and mailed to your email address. Please check your email.";
    echo "<script type='text/javascript'>alert('$message'); window.location='index.php';</script>";
}
else
{
    $message = "No such user";
    echo "<script type='text/javascript'>alert('$message'); window.location='forgot.php';</script>";
}
?>