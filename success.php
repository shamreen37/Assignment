<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" type="text/css" href="newcss.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
 .jumb{
margin-bottom:50px;
width:60%;
background-color:rgba(128,128,128,0.5);
margin-left: 150px;
}
body{
        background-image: url("Image/awe1.jpg");
    background-size: cover;
        background-color: aqua;
        position: relative;
        min-height: 100vh;
    }
     #foot{
        position: absolute;
        bottom:0;
        width: 100%;
    }  
     .main{
        width: 90vw;
        margin: 0 auto;
        padding :30px 20px;
       
    }
.btn{
    background-color:rgba(128,128,128,1);
    color:black;
    font-weight: 600;
    font-size: 30px;
   border: 2px solid black;
   border-radius : 10px;
}
a{
    color: black;
}



        </style>
    </head>
    <body>
        <?php
     include("includes/common.php");
        include("includes/header1.php");
        ?>
        <br><br><br><br><br>
        <div class="main">
        <div class="container ">
                  
    <div class="jumbotron jumb">
        <center>  <h1>Awesome!</h1>
            <p>Your order is confirmed.<br>Thank you for shopping with us.</p><br>
            <a href="products.php" class="btn shadow animate grey">Continue shopping </a> <br><br>
            <p><a href="index.php"><-Back to Home</a><p>
        </center>
    </div>
</div>
        </div>    
    <?php
        include("includes/footer1.php");
        ?>     
        
    </body>
</html>
