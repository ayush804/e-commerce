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
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="logincss.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">LOGIN</div>
                <div class="panel-body">
                    <p class="text-warning">Login to make a purchase</p>
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="panel-footer">Don't have an account? Register <a href="signup.php">here</a></div>
            </div>
        </div>
        <br><br><br>
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>
