<?php
require 'includes\common.php';
if(isset($_SESSION['email']))
{
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign UP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="signup.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div class="container container_style">
            <form method="post" action="signup_submit.php">
                <h1>Sign UP</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="pwd" placeholder="Password (Minimum 6 characters)" pattern=".{6,}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact (10 Digits)" pattern=".{10,}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>
