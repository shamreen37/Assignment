<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        background-image: url("Image/setting.jpg");
    background-size: cover;
        background-color: aqua;
        position: relative;
        min-height: 100vh;
    }
        .main{
        width: 90vw;
        margin: 0 auto;
        padding :30px 20px;

    }
     #foot{
        position: absolute;
        bottom:0;
        width: 100%;
    } 
    .pnl{
        color: black;
background:rgba(128,128,128,0.4);
}
    
</style>

    </head>
    <body>
        <?php
       include("includes/common.php");
       if(!isset($_SESSION['email'])){
           header('location:index.php');
       }
       
       
        include("includes/header1.php");
        ?>
        <br><br><br><br><br><br>
        <div class="main"> 
         <div class="row row_style">
     <div class="col-xs-7 col-xs-offset-3">
        <div class="panel panel-info pnl">
           
          <div class="panel-body">
               <h1 id="text-warning"> Change Password <h1>
                       <form method="POST" action="includes/settings_script.php">
             <div class="form-group">
             <input type="password" class="form-control " name="old_pass" placeholder="Old Password">
              </div>  
             <div class="form-group">
             <input type="password" class="form-control " name="new_pass" placeholder="New Password">
             </div>
            <div class="form-group">
             <input type="password" class="form-control " name="re_new_pass" placeholder="Re-type New Password">
             </div>
            
             <div class="form-group">
             <input type="submit" class="btn btn-primary btn-lg " value="Change" >
              </div>
          </form>
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
