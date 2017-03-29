<?php
require 'includes\common.php';
$oldpwd = mysqli_real_escape_string($con, md5($_POST['oldpwd']));
$newpwd = mysqli_real_escape_string($con, md5($_POST['newpwd']));
$renewpwd = mysqli_real_escape_string($con, md5($_POST['renewpwd']));
$email=$_SESSION['email'];
$pwd_query="SELECT pwd FROM `users` WHERE `email` = '$email'";
$pwd_query_result= mysqli_query($con, $pwd_query)or die(mysqli_error($con));
$check_row= mysqli_num_rows($pwd_query_result);
$row= mysqli_fetch_array($pwd_query_result);
if (!strcmp($row['pwd'], $oldpwd))
{
    if(strcmp($renewpwd, $newpwd)==0)
    {
        $update_query="UPDATE `users` SET `pwd` = '$newpwd' WHERE `users`.`email` = '$email';";
        $update_query_result= mysqli_query($con, $update_query)or die(mysqli_error($con));
        $message = "Password changed successfully.";
        echo "<script type='text/javascript'>alert('$message'); window.location.replace('products.php');</script>";
        exit();
    }
    else
    {
        header('location: settings_error.php');
    }
}
else
{
    $message = "Incorrect old password.";
    echo "<script type='text/javascript'>alert('$message'); window.location.replace('settings.php');</script>";
}
?>