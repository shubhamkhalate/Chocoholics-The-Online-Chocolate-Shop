<?php

session_start();

require 'check_if_added.php';

?>

<!DOCTYPE html>

<html>

<head>
	<link rel="shortcut icon" href="img/ChocoLovers-Logo.png" />
	<title>Chocoholics-The Chocolate Store</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- latest compiled and minified CSS -->

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

	<!-- jquery library -->

	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>

	<!-- Latest compiled and minified javascript -->

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<!-- External CSS -->

	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>

	<div>

		<?php

		require 'header.php';

		?>

		<div class="container">

			<div class="jumbotron">

				<h1><b>Welcome To Our Chocolate Store</b></h1>
				<marquee>
					<p><i>"Taste the best homemade chocolates here.., Let's chocolates makes your day.., A fun full of delight.., Fresh chocolate, fresh friendship"</i></p>
				</marquee>

			</div>

		</div>

		<div class="container">

			<div class="row">

				<div class="col-md-3 col-sm-8">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/t1.jpg" alt="t1">
						</a>

						<center>

							<div class="caption">
								<h3>Caramal Truffle</h3>
								<p>Price: Rs. 360.00</p>

								<?php if (!isset($_SESSION['email'])) { ?>

							<p>
								<a href="login.php"
								role="button" 
								class="btn btn-primary btn-block">
								Buy Now
								</a>
							</p>

									<?php
								} else {

									if (check_if_added_to_cart(1)) {

									echo '<a href="#" class=btn btn-block btn-success disabled>
									Added to cart
									</a>';
									} else {

									?>
									<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								}

								?>

							</div>

						</center>
					</div>

				</div>

				<div class="col-md-3 col-sm-6">

					<div class="thumbnail">

						<a href="cart.php"><img src="img/t2.jpg" alt="t2">
						</a>
						<center>

							<div class="caption">
								<h3>Creamy Truffle</h3>
								<p>Price: Rs. 400.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(2)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {

									?>
										<a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"> Add to cart</a>

								<?php
									}
								}

								?>

							</div>

						</center>

					</div>

				</div>

				<!-- <div class="col-md-3 col-sm-10">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/t4.jpg" alt="t4"></a>

						<center>

							<div class="caption">
								<h3>Ferrero Rocher</h3>
								<p>Price: Rs. 500.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(3)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {

									?>
										<a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">
											Add to cart
										</a>

								<?php
									}
								}

								?>

							</div>

						</center>

					</div>

				</div> -->

				<div class="col-md-3 col-sm-">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/t3.jpg" alt="t3">
						</a>

						<center>

							<div class="caption">
								<h3>Mix truffles</h3>
								<p>Price: Rs. 800.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(4)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {

									?>
										<a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								}

								?>

							</div>

						</center>

					</div>

				</div>

				<div class="col-sm-3 col-sm-6">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/a2.jpg" alt="a2" >

						</a>

						<center>

							<div class="caption">
								<h3>Assorted2</h3>
								<p>Price: Rs. 300.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(6)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {

									?>

										<a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								}

								?>

							</div>

						</center>

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-md-3 col-sm-6">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/a1.jpg" alt="a1"></a>

						<center>

							<div class="caption">
								<h3>Assorted1</h3>
								<p>Price: Rs. 130.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(5)) {
									echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {

									?><a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
								<?php
									}
								}

								?>

							</div>

						</center>

					</div>

				</div>

				<div class="col-sm-3 col-sm-6">

					<div class="thumbnail">

					<a href="cart.php">
							<img src="img/p4.jpg" alt="p4">
						</a>

						<center>

							<div class="caption">
								<h3>Soft Centered</h3>
								<p>Price: Rs. 120.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(12)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {
									?>

										<a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								} ?>
							</div>

						</center>

					</div>

				</div>

				<div class="col-md-3 col-sm-6">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/a3.JPG" alt="a3"></a>

						<center>

							<div class="caption">
								<h3>Assorted3</h3>
								<p>Price: Rs. 800.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(7)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {

									?>

										<a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								}

								?>

							</div>

						</center>

					</div>

				</div>

				<div class="col-md-3 col-sm-6">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/a4.jpg" alt="a4"></a>

						<center>

							<div class="caption">
								<h3>Assorted4</h3>
								<p>Price: Rs. 180.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(8)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {

									?>

										<a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								}


								?>

							</div>

						</center>

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-md-3 col-sm-6">

					<div class="thumbnail">
						<a href="cart.php">
							<img src="img/p1.jpg" alt="p1">
						</a>

						<center>

							<div class="caption">
								<h3>Dark Diamonds</h3>
								<p>Price: Rs. 150.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(9)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {

									?>

										<a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								}
								?>

							</div>

						</center>

					</div>

				</div>

				<div class="col-md-3 col-sm-6">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/p22.jpg" alt="p22">
						</a>

						<center>

							<div class="caption">
								<h3>Mixed Combo</h3>
								<p>Price: Rs. 1000.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(10)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {
									?>

										<a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								}
								?>

							</div>

						</center>

					</div>

				</div>

				<div class="col-md-3 col-sm-6">

					<div class="thumbnail">

						<a href="cart.php">
							<img src="img/p3.jpg" alt="p3">
						</a>

						<center>

							<div class="caption">
								<h3>Milky Whites</h3>
								<p>Price: Rs. 900.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

									<?php
								} else {

									if (check_if_added_to_cart(11)) {

										echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
									} else {
									?>

										<a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

								<?php
									}
								}
								?>

							</div>

						</center>

					</div>

				</div>

			 <div class="col-md-3 col-sm-6">

					<div class="thumbnail">

						
					<a href="cart.php">
							<img src="img/t4.jpg" alt="t4"></a>

						<center>

							<div class="caption">
								<h3>Ferrero Rocher</h3>
								<p>Price: Rs. 500.00</p>

								<?php if (!isset($_SESSION['email'])) {  ?>

<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

    <?php
} else {

    if (check_if_added_to_cart(3)) {

        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {

    ?>
        <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">
            Add to cart
        </a>

<?php
    }
}

?>

</div>

</center>

					</div>

				</div> 

			</div>

		</div>
		<br><br><br><br><br><br><br><br>

		<footer class="footer">

			<div class="container">

				<center>

					<p>Copyright &copy <a href="https://chocoholics.in">Chocoholics</a>-The Chocolate Store. All Rights Reserved.</p>

					<p>This website is developed by Gauri Pawar & Shubham Khalate</p>

				</center>

			</div>

		</footer>

	</div>

</body>

</html>