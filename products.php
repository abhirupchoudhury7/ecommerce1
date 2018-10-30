<?php
require("common.php");
?>
<!DOCTYPE html>

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
        include 'header.php';
        include 'check_if_added.php';
        ?>
        <div class="container">
            
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/cannon.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/sony 2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/sony 1.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/olympus.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/titan 1.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/titan 2.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/milan.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/faberluba.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 18000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt1.jpg" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt 2.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt 3.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt 4.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price Rs. 1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }  else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>

        <?php include("footer.php"); ?>
    </body>

</html>
