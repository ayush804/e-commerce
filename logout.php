<?php
require 'includes\common.php';
$id=$_SESSION['id'];
echo $id;
if(isset($_SESSION['email']))
{
    session_destroy();
    header('location: index.php');
}
else
{
    header('location: index.php');
}
?>