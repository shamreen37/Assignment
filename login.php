<html>
    <head>
        <meta charset="UTF-8">
        <title>Login page</title>
         <title>Products</title>
         <link rel="stylesheet" type="text/css" href="newcss.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <style>
body{
background-image: url("Image/img6.jpg");
background-size:cover;
position: relative;
        min-height: 100vh;

}
.main{
        width: 90vw;
        margin: 0 auto;
        padding: 30px 20px;
       
    }

#foot{
background-color:#000;
color:#fff;
font-size:14px;
 position: absolute;
        bottom:0;
        width: 100%;
        height:40px;
}
.row_style{
margin-top:95px;
margin-bottom:35px;
}
.pnl{
background:rgba(0,0,0,0.3);
margin: 10px;
}

#text-warning{
    color:rgba(172,230,255,1);
}
.btn{
    background-color:rgba(172,230,255,1); 
    color: black;
    font-weight: 600;
    width: 120%;
}
</style> 
       </head>
    
    
       <body>
        <?php
        include("includes/common.php");
      
       include("includes/header1.php");
       ?>
        <div class="main">
 <div class="row row_style">
     <div class="col-xs-7 col-xs-offset-0">
        <div class="panel panel-info pnl">
      
          <div class="panel-body">
              <h1 id="text-warning"> <span class="glyphicon glyphicon-log-in">  </span>  Login <h1>
   <form method="POST" action="includes/login_submit.php">
            <div class="form-group" style="margin-right: 30px;margin-left: 40px;">
             <input type="text " class="form-control input-md " name="email" placeholder="Email">
              </div>  
             <div class="form-group" style="margin-right: 30px;margin-left: 40px;">
             <input type="password" class="form-control input-md " name="password" placeholder="Password">
             </div>
            <div class="form-group"  style="float:right;margin-right: 50px;">
                 <center>
             <input type="submit" class="btn btn-primary btn-lg " value="LOGIN" >
              </div>
           </center>
   </form>
        </div>
        
            <h4 style="margin-left:20px;margin-bottom: 20px;"><a href="signup.html" style="color:white;">     Don't have an account? Register</a></h4>
         
</div>
</div>
</div>
        </div>
<?php
include("includes/footer1.php");
?>

    </body>
</html>
