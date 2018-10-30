<?php
require 'common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
   <html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style 1.css">
         <link rel="icon" href="images/lifestyle1.jpg">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a href="index.php" class="navbar-brand">Lifestyle Store</a>
             </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                </ul>
            </div>
        </div>
        </div>
        
        <div class="container">
            <div class="row row_style">
                   
                        <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>LOGIN</h1>
                    </div>
                
        <div class="panel-body">
            
            <p><i>Login to make a purchase</i></p>
            <form method="POST" action="login_submit.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                     <input type="submit" value="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="panel-footer">
            Don't have an account? <a href="signup.php">Register</a> 
        </div>
                </div>
                        </div>
                        </div>
        </div>
                            
        <?php
          require 'footer.php';
          ?>
        
    </body>
</html>
