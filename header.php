<head>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>

<nav class="navbar navbar-inverse navabar-fixed-top">
        
       <div class="container">
         <aside class="logo"><img src="img/ChocoLovers-Logo.jpg" align="left" height="100%" width="100%"></aside>
                  
	 <div class="navbar-header">
                     
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    
                       <span class="icon-bar"></span>
                           
			<span class="icon-bar"></span>
                         
			  <span class="icon-bar"></span>
                     
	  </button>
        <center>
	     <a href="index.php" class="navbar-brand">   "Chocoholics-The Chocolate Store"   </a>
        </center> 
         </div>
                   
                   
	<div class="collapse navbar-collapse" id="myNavbar">
                
       <ul class="nav navbar-nav navbar-right">
                           
<?php
                         
	  if(isset($_SESSION['email']))
{
             
 ?>
                          
 <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        
<li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           
<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           
<?php
                           
}
else
{
                            
?>
              
<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                          
 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
 
<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> About</a></li>
                          
 <?php
                           
}
                           
?>
                           
                      
 </ul>
                   
</div>
               
</div>

</nav>