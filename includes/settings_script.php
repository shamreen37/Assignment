<?php
       
include("common.php");
 if(!isset($_SESSION['email'])){
           header('location:index.php');
       }
       $user_id=$_SESSION['id'];
$new_pass=$_POST['new_pass'];
$re_new_pass=$_POST['re_new_pass'];
$old_pass=$_POST['old_pass'];
$select_query="SELECT password FROM users where id='$user_id'";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_row($select_query_result);
if($new_pass== $re_new_pass) {
   
     if($old_pass==$row[0]){
   $update_query="UPDATE users SET password='$re_new_pass' WHERE id='$user_id' ";
   $update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
   echo 'Password successfully changed';
       }
       else {
           echo 'Your old password is not correct';      
 
       }
}else{
    echo 'password confirmation does not match'; 
}
?>