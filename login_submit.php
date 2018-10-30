<?php
require 'common.php';
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
$select_query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows=mysqli_num_rows($select_query_result);
if($total_rows==0){
    echo "Enter correct email-ID or Password";
}
 else {
$row=mysqli_fetch_array($select_query_result);
$_SESSION['email'] = $row['email'];
$_SESSION['user_id'] = $row['id'];
header('location:products.php');
}

?>


