<?php
       include("common.php");
     $name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$contact= $_POST['contact'];
$city= $_POST['city'];
$address= $_POST['address'];  



    $signup_script_query="INSERT INTO users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
$user_registration_submit= mysqli_query($con,$signup_script_query) or die(mysqli_error($con));

$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
header('location:../login.php');
?>