<html>
    <head>
        <title>About Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="products.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h3>LIVE SUPPORT</h3>
                    <h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem lpsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly beleivable. If you are going to us a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="col-md-2">
                    <br><img src="contact.png">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h3> CONTACT US </h3><br>
                    <div class="container container_style">
                        <form method="post" style="max-width: 600px;">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="password" name="message" rows="4" cols="50" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" onclick="Function()">Submit</button>
                <script>
                    function Function() {
                    alert("Thanks for your response. We'll be back to you shortly.");
                    }
                </script>
             </form>
        </div>
                </div>
                <div class="col-md-4">
                    <h3>Company Information</h3>
                    500 Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Patna,<br>India<br>Phone : +91-123-00000<br>Fax : (000)000 00 00 0<br>Email : info@fashionstreet.com<br>Follow on : Facebook, Twitter
                </div>
            </div>
        </div>
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>