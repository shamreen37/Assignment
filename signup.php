<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign up</title>
        <link rel="stylesheet" type="text/css" href="newcss.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    *{
        margin: 0;
        padding:0;
        box-sizing: border-box;
    }
    
body{
background-image: url("Image/img4_1.jpg");
background-size: cover;
 position: relative;
        min-height: 100vh;
}
#foot{
background-color:#000;
color:#fff;
font-size:14px;
 position: absolute;
        bottom:0;
        width: 100%;
height: 40px;
}
 .main{
        width: 90vw;
        margin: 0 auto;
        padding: 30px 20px;
    }
.row_style{
margin-top:50px;
margin-bottom:10.5px;
}
.pnl{
background-color:rgba(128,128,128,0.5);
}
#text-warning{
    color:rgba(172,230,255,1);
    margin-left: 35px;
}
.btn{
    background-color:rgba(172,230,255,1); 
    color: black;
    font-weight: 600;
}


</style>
        
        
    </head>
    <body>
        <?php
    
       include("includes/common.php");
       //  if(isset($_SESSION['email'])){
           // header('location:products.php');
           include("includes/header1.php");
       ?>
        <div class="main">
        <div class="row row_style">
  <div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-info pnl">
     
     <div class="panel-body">
          <h1 id="text-warning">SIGN UP <span class="glyphicon glyphicon-user"> </span>  <h1>
                  <form method="POST" action="includes/signup_script.php" >
 <div class="form-group" style="margin-right: 30px;margin-left: 40px;">
  <input type="text" class="form-control " name="name" placeholder="Name" required="true">
</div>
  <div class="form-group" style="margin-right: 30px;margin-left: 40px;">
      <input type="text" class="form-control " name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.]+\.[a-z]{2,3}$" title="Please include upper case,lower case,symbols" >
</div>  
<div class="form-group" style="margin-right: 30px;margin-left: 40px;">
    <input type="password" class="form-control " name="password" placeholder="Password" required="true" pattern=".{6,}">
</div>
<div class="form-group" style="margin-right: 30px;margin-left: 40px;">
    <input type="Numeral" class="form-control " name="contact" placeholder="Contact" required="true" inputmode="numeric" minlength="10" maxlength="10">
</div>
<div class="form-group" style="margin-right: 30px;margin-left: 40px;">
  <input type="text" class="form-control " name="city" placeholder="City" required="true">
</div>
<div class="form-group" style="margin-right: 30px;margin-left: 40px;">
  <input type="text-area" class="form-control " name="address" placeholder="Address" required="true">
</div>
    <center>
<div class="form-group">
  <input type="submit" class="btn btn-primary btn-lg btn" value="Submit" >
</div>
</center>



 </div>
 </form>


 
  
</div></div>
</div>

        </div>

<?php
      
       include("includes/footer1.php");
       ?>
        
        
 
</body>
</html>
