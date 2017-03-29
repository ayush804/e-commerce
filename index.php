<?php
require 'includes\common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <div>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>
