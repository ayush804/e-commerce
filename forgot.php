<?php
require 'includes\common.php';
if(isset($_SESSION['email']))
{
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forgot</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="forgot.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div class="container container_style">
            <form method="post" action="forgot_submit.php">
                <h1>Enter e-mail Address</h1>
                <div class="form-group">
                    <input type="email" class="form-control" id="name" name="email" placeholder="Email Address">
                </div>
                <button type="submit" class="btn btn-primary">Forgot</button>
            </form>
        </div>
        <br><br><br><br>
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>