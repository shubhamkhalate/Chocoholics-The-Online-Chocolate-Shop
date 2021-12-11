<?php
    
	session_start();
    
	require 'connection.php';
    
	if(!isset($_SESSION['email']))
	{
        
		header('location: login.php');
    
	}
   
 ?>
 <!DOCTYPE html>

<html>
   
 <head>
     
   <link rel="shortcut icon" href="img/ChocoLovers-Logo.jpg" />
 
       <title>Chocoholics.in</title>
       
 <meta charset="UTF-8">
       
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
         
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
   
          
	 <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        
	  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     
	         
		 <link rel="stylesheet" href="css/style.css" type="text/css">
  
  </head>
   
 <body>
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1> <center><b>Chocololic Chocolate Store</b></center><h1>
           <h2 class="text-center pt-5"> <i>Customer Bill</i></h2>
               <?php
                $id=$_GET["id"];
                $sql="SELECT * FROM users WHERE id=\"$id\"";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($result)){
               ?>
               <div class="row">
                 <p>Billing name: <?php echo $row['name'] ?></p>
                 <p>Billing email: <?php echo $row['email'] ?></p>
                 <p>Billing contact: <?php echo $row['contact'] ?></p>
                 <p>Billing city: <?php echo $row['city'] ?></p>
                 <p>Billing address: <?php echo $row['address'] ?></p>
                </div>


                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>

                <?php $usersid=$row['id'];
                $total=0;
                $sels="SELECT * FROM 'users_items' ";
                $rss=$con->query($sels);
                while($row=$rss->fetch_assoc()){

                 // $selp="SELECT * FROM items WHERE id='$item_id'";
                  $selp="SELECT users_items.item_id, users.name FROM users_items, users WHERE users_items.user_id=users.id;"
                  //$rsp=$con->query($selp);
                  //while($rowp=$rsp->fetch_assoc()){

                   //$total=$total+($rows['qty']*$rows['price']);
                  ?>
                <tr>
                  <tr><?php echo $rowp['name']?></td>
                  <tr><?php echo $rowp['price']?></td>
                  <tr><?php echo $rowp['qty']?></td>
                  <tr><?php echo $rowp['qty']*$rows['price'];?></td>
                </tr>

                  <?php }
                    }?>
                    <tr>
                      <th colspan="3">Sub Total</th>
                      <th><?php echo $total; ?></th>
                  </tr>

                  </tbody>
                  </table>


               <?php   ?>

                  </div>
                  </div>
  </html>