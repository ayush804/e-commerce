<?php
    require 'includes\common.php';
    $uid=$_SESSION['id'];
    $pid=(filter_input(INPUT_GET, 'id'));
    $query="INSERT INTO users_items(uid, pid, status) VALUES('$uid', '$pid', 'Added to cart')";
    $submit_query= mysqli_query($con, $query) or die (mysqli_error($con));
    header('location: products.php');
?>