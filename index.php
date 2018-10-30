<!DOCTYPE HTML>
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
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="images/lifestyle1.jpg">

    </head>
    <body>
        <?php
        require "header.php";
        ?>
        <div class="banner_image">
            <div class= “container”>
                <center>
                <div class="banner_content">
                    <h1>We sell lifestyle</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <div class="container">
                        <center> <div class="row">
                        <div class="col-xs-7">     
                        <button type="button" class="btn btn-danger btn-lg active" data-toggle="modal" data-target="#myModal">Shop Now</button>
                        </div>
                            </div> </center>  
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
          <h4 class="modal-title"><span class="john">LOGIN</span></h4>
      </div>
      <div class="modal-body">
          <p><i><span class="john">Login to make a purchase</span></i></p>
          <form method="POST" action="login_submit.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                     <div class="row">
        <div class="col-sm-6 text-left">
                     <input type="submit" value="submit" class="btn btn-primary">
        </div>
                     </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
          <div class="row">
        <div class="col-sm-6 text-left">
            <p><span class="john">Don't have an account? </span><a href='signup.php'>Register</a>
        </div>
          </div>
      </div>
    </div>

  </div>
</div>
                    </div>
                        
                                                                                          
                </center>
        </div>
        </div>
        <div class="container">
            <div class="row alignment_s">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/c.jpg" alt="responsive image">
                        <div class="caption">
                           <h2>Cameras</h2> 
                           <p>Choose among the best available in the world.</p>
                        </div>
                    </div>
                </div>
           
        
        
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/w.jpg" alt="responsive image">
                        <div class="caption">
                           <h2>Watches</h2> 
                           <p>Original watches from the best brands.</p>
                        </div>
                    </div>
                </div>
        <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/s.jpg" alt="responsive image">
                        <div class="caption">
                       <h2>Shirts</h2> 
                        <p>Our equisite collection of shirts.</p>
                        </div>
                    </div>
                </div>
            </div>
         </div>    
            
            
        
        
        <?php
        require "footer 1.php";
        ?>
    </body>
    
</html>
