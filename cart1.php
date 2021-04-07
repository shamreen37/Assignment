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
        background-image: url("Image/shop.jpg");
    background-size: cover;
      
        position: relative;
        min-height: 100vh;
    }
    .main{
        width: 90vw;
        margin: 0 auto;
        padding: 30px 20px;
    
    }
    #foot{
        position: absolute;
        bottom:0;
        width: 100%;
        height: 40px;
    }  
    tbody{
        color: white;
    }
</style>




    </head>
    <body>
        <?php
      include("includes/common.php");
        include("includes/header1.php");
       $user_id=$_SESSION['id'];
       $select_query="SELECT *from users_items where user_id='$user_id'";
       $select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
       $join_query="SELECT items.id, items.name,items.price FROM items INNER JOIN users_items ON items.id=users_items.item_id where users_items.user_id='$user_id'";
       $join_query_result=mysqli_query($con, $join_query) or die(mysqli_error($con));
       if(mysqli_num_fields($join_query_result)==0){
           echo 'ADD ITEMS TO CART FIRST';
   }
 $sum=0;
   
        ?>
        <br><br><br><br>
        <div class="main">
   
<div class="table-responsive">
<table class="table  table-bordered">
     <tbody>
         <tr>  <th>Item Number</th>
               <th>Item Name</th>
               <th>Price</th>
               <th>  Action  </th>
         </tr><?php while($row= mysqli_fetch_array($join_query_result)){    
             
           $sum= $sum +$row['price'];
             ?>
         <tr>     <td><b><?php echo $row['id'];   ?></b></td>
             <td><b><?php echo $row['name'];   ?></b></td>
             <td><b><?php echo $row['price']."/-";   ?></b></td>
                 <td><center><a href="includes/cart_remove.php?id=<?= $row['id']?>" style="color:white;" class="remove_item_link"> Remove </a></center></td>
         </tr><?php }?>
        <tr>     <td></td>
                 <td>Total</td>
                 <td>Rs. <?php echo $sum ?> /-</td>
                 <td><center><a href="success.php" class="btn btn-primary">Confirm Order</a></center></td> 
         </tr>
      </tbody>
     </table>
 </div>
  
            
            
        </div>
        
        <?php
        include("includes/footer1.php");
        ?>
    </body>
</html>
