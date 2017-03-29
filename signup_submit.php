<?php
require 'includes\common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$pwd = mysqli_real_escape_string($con,md5($_POST['pwd']));
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$check="SELECT id  FROM users WHERE email = '$email'";
$check_submit= mysqli_query($con, $check) or die(mysqli_error($con));
$check_row= mysqli_num_rows($check_submit);
if($check_row>=1)
{
    $message = "User already exists.";
    echo "<script type='text/javascript'>alert('$message'); window.location='signup.php';</script>";
}
else
{
    $user_registration_query = "insert into users(name, email, pwd, phone, city, address) values ('$name', '$email', '$pwd', '$contact', '$city', '$address')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header('location: products.php');
}
?>