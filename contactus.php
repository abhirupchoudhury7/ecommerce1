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
        <div class="container">
            <div class="row row_bro">
                <div class="col-sm-9">
                    <h1>LIVE SUPPORT</h1>
                    <h3>24 Days|7 Days a Week|365 Days Live Technical Support</h3>
                    <p>We are here to answer any questions that you have about our Lifestyle Store experiences.Reach out to us ans we will respond as soon as possible.</p>
                        
                    <p>Even if there is something you always wanted to experience and can't find it here,let us know and we will try our best to find it for you and guide you there</p>        
                </div>
                <div class="col-sm-3">
                    <img src="images/contact.jpg" class="img-responsive" alt="responsive image">
                </div>
            </div>
        
        <div class="row">
            <div class="col-sm-7">
                <h1>CONTACT US</h1>
                
                    <form method="POST" action="contactus_submit.php">
                    Name:<input type="text" class="form-control" name="name"><br></br>
                    Email:<input type="text" class="form-control" name="email"><br></br>
                    <div class="form-group">
                    <label for="form_message">Message:</label>
                    <textarea id="form_message" name="message" class="form-control" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    </div>
                    <button type = "submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-3 col-sm-offset-2">
                <h3>Company Information</h3>
                NIT Silchar
                <br>
                Silchar
                <br>
                Cachar,Assam
                <br>
                PIN-788010
                <br>
                Phone No-9988112277
                <br>
                email:customerrelations@lifestylestore.com
            </div>
        </div>
            
        </div>
    </body>
    <?php
    require "footer 1.php";
    ?>
</html>