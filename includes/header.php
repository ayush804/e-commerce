<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Fashion Street</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['email']))
                    { 
                        ?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        ?>
                        <?php
                    } 
                    else 
                    { 
                        ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign UP</a></li>
                        <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php 
                    }
                ?>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
                        <li><a href="contactus.php"><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>
            </ul>
         </div>
    </div>
    </div>
          <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
            <p>Don't have an account? <a href="signup.php">Register</a></p>
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
        <div class="modal-footer" style="text-align: left">
            <a href="forgot.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

                        