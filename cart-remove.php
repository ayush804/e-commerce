<?php
    include 'includes\common.php';
    $id=$_SESSION['id'];
    $pid=(filter_input(INPUT_GET, 'id'));
    $query="DELETE FROM `users_items` WHERE `users_items`.`pid` = '$pid' AND `users_items`.`uid` = '$id';";
    $query_result= mysqli_query($con, $query) or die (mysqli_error($con));
    header('location: cart.php');
?>