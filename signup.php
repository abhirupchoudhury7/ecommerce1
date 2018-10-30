<?php
 require "common.php";
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
        <?php
        require 'header.php';
        ?>
                
        <div class="container">
            <div class="row row_style">
                   
                        <div class="col-xs-4 col-xs-offset-4">
                
                            <h1>SIGN UP</h1>
                        
         
            <form  action="signup_script.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="Name" placeholder="Name" required ="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Email" placeholder="Email" required ="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="Password" placeholder="Password" required="true" pattern=".{6,}">
                </div>
                <div class="form-group">
                    <input type="int" class="form-control" name="Contact" placeholder="Contact" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="City" placeholder="City" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Address" placeholder="Address" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                </div>
                <div class="form-group">
                     <input type="Submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        
                </div>
        </div>                       
      
        <?php                    
        require 'footer.php'
        ?>
        
    </body>
</html>
