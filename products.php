<html>
    <head>
        <meta charset="UTF-8">
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="newcss.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .hw{
        height:322.5px;
    }
    #hw1{
        height: 169px;
    }
.jumb{
     margin-bottom:50px;
    }
#foot{
background-color:#000;
color:#fff;
font-size:14px;
}
</style>
        
        </head>
    <body>
        <?php
        include("includes/common.php")
        ?>
        
        <?php
        include("includes/header1.php");
        include("includes/check-if-added.php");
        ?>

            
            <br><br><br><br>

<div class="container ">
    <div class="jumbotron jumb">
        <h1>Welcome to our Lifestyle Store!</h1>
     <p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</p>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
             <img src="Image/5.jpg" alt="" >
          <div class="caption">
             <center>  <h2>Cannon EOS</h2>
                 <p>Price: Rs.36000.00</p><?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(1)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
             </div>
          </div>
        </div>
  
        
        
        
        <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/2.jpg" alt="" >
      <div class="caption">
      <center>  <h2>Sony DSLR</h2>
       <p>Price: Rs.40000.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(2)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
 <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/3.jpg" alt="" >
      <div class="caption">
      <center>  <h2>Sony DSLR</h2>
       <p>Price: Rs.50000.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(3)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
<div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/4.jpg" alt="" >
      <div class="caption">
      <center>  <h2>Olympus DSLR</h2>
       <p>Price: Rs.80000.00</p>
        <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(4)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
</div>



<div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
             <img src="Image/9.jpg" alt="" >
           <div class="caption">
            <center>  <h2>Titan Model #301</h2>
              <p>Price: Rs.13000.00</p>
             <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(5)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
             </div>
          </div>
        </div>
  <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/10.jpg" alt="" >
      <div class="caption">
      <center>  <h2>Titan Model #201</h2>
       <p>Price: Rs.3000.00</p>
        <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(6)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
 <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/11.jpg" alt="" >
      <div class="caption">
      <center>  <h2>HMT Milan</h2>
       <p>Price: Rs.8000.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(7)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
<div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/12.jpg" alt="" >
      <div class="caption">
      <center>  <h2>Faber Luba #111</h2>
       <p>Price: Rs.18000.00</p>
        <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(8)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
</div>


<div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail hw">
              <img src="Image/8.jpg" alt="" id="hw1" >
          <div class="caption">
             <center>  <h2>H&W</h2>
              <p>Price: Rs.800.00</p>
              <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(9)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
             </div>
          </div>
        </div>
  <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/6.jpg" alt="" >
      <div class="caption">
      <center>  <h2>Luis Phil</h2>
       <p>Price: Rs.1000.00</p>
        <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(10)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
 <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/13.jpg" alt="" >
      <div class="caption">
      <center>  <h2>John Zok</h2>
       <p>Price: Rs.1500.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(11)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
<div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="Image/14.jpg" alt="" >
      <div class="caption">
      <center>  <h2>Jhalsani</h2>
       <p>Price: Rs.1300.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(12)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              </center> 
      </div>
     </div>
</div>
</div>
</div>



 <?php
        include("includes/footer1.php");
        ?>

        
    </body>
</html>
