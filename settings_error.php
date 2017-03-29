<?php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="settings_error.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <script type="text/javascript"> alert('Password Mismatch');
            window.location.replace('settings.php');
        </script>
        <div class="container container_style">
            <form method="post" action="settings_submit.php">
                <h1>Change Password</h1>
                <div class="form-group">
                    <input type="password" class="form-control" id="name" name="oldpwd" placeholder="Old Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="email" name="newpwd" placeholder="New Password Minimum (6 characters)">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="renewpwd" placeholder="Re-type New Password">
                </div>
                <button type="submit" class="btn btn-primary">Change</button>
            </form>
        </div>
        <br>
        <?php>
        include 'includes\footer.php';
        ?>
    </body>
</html>