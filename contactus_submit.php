<?php
        require 'common.php';
	
		$name = $_POST['name'];
                $name = mysqli_real_escape_string($con, $name);
		$email = $_POST['email'];
                $email = mysqli_real_escape_string($con, $email);
		$message = $_POST['message'];
                $message = mysqli_real_escape_string($con, $message);
		
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		
		else if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		

		else if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
                else{
                    $query = "INSERT INTO contactus(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
                    mysqli_query($con, $query) or die(mysqli_error($con));
                    header('location: thanks.php');
                }
		
        
	
?>