<html>
    <head>
        <meta charset="UTF-8">
        <head>
            <link rel="stylesheet" type="text/css" href="newcss.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
 <title>Lifestyle store</title>
 <style>.button{
     width: 350px;
}
 
 </style>
    </head>
    
    <body>
        <?php
       include("includes/common.php");
     if(isset($_SESSION['email'])){
        // header('location:products.php');
      session_destroy();  
       }
        ?>
        <?php
        include("includes/header1.php");
        ?>
        
        
<div class="content">
    <div class="banner-image" >
<div class="inner-banner-image"><center>
<div class="banner_content">
<center><h1>We sell lifestyle.</h1>
<p>Flat 40% OFF on premium brands</p>
<div class="button">YOUR STYLE.YOUR STORE.</div></center>
</div></center>
</div>
</div>

<div class="container">
<div class="row">
    <a href="login.php" >
<div class="col-sm-4">
      <div class="thumbnail">
          <img src="Image/1.jpg" alt="" >
      <div class="caption">
       <h2>Cameras</h2>
       <p>Choose among the best available in the world.</p>
 </div>
      </div></div></a>
    
    <a href="login.php" >
<div class="col-sm-4">
    <div class="thumbnail"> <img src="Image/7.jpg" alt="" >
<div class="caption">
<h2>Watches</h2>
<p>Original watches from the best brands.</p>
</div></div>
</div></a>

    
    
    <a href="login.php" >
    <div class="col-sm-4">
<div class="thumbnail">
    <img src="Image/8.jpg" alt="" >
<div class="caption">
<h2>Shirts</h2>
<p>Our exquisite collection of shirts.</p>
</div>
</div>
    </div></a>


</div>
</div>

<footer id="foot">
<div class="container">

<center><p>Copyright© Lifestyle Store.All Rights Reserved| Contact Us:91 90000 00000</p></center>
</div>

</footer>

        
        
    </body>
</html>
