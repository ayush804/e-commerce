<?php
function check_if_added_to_cart($item_id)
{
    $con= mysqli_connect("localhost", "root", "", "ecommerce")or die(mysqli_error($con));
    $id=$_SESSION['id'];
    $query="SELECT items FROM users_items WHERE pid='$item_id' AND uid ='$id' and status='Added to cart'";
    $check_query= mysqli_query($con, $query) or die (mysqli_error($con));
    $check_row= mysqli_num_rows($check_query);
    if($check_row>=1)
    {
        return 1;
    }
 else
    {
        return 0;
    }
}
?>