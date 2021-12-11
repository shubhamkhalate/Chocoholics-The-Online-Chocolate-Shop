<?php

require 'connection.php';

session_start();

if (isset($_SESSION['email'])) {

	header('location: products.php');
}

?>


<!DOCTYPE html>

<html>

<head>
	<link rel="shortcut icon" href="img/ChocoLovers-Logo.png" />
	<title>Chocolate-The Chocolate Store</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>

	<div>

		<?php

		require 'header.php';

		?>
		<br><br>

		<div class="container">

			<div class="row">

				<div class="col-xs-4 col-xs-offset-4">

					<h1><b>SIGN UP</b></h1>

					<form method="post" action="user_registration_script.php">

						<div class="form-group">

							<input type="text" class="form-control" name="name" placeholder="Name" required="true">

						</div>

						<div class="form-group">

							<input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">

						</div>

						<div class="form-group">

							<input type="password" class="form-control" name="password" placeholder="Password(min. 8 characters)" required="true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

						</div>

						<div class="form-group">

							<input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">

						</div>

						<div class="form-group">

							<input type="text" class="form-control" name="city" placeholder="City" required="true">

						</div>

						<div class="form-group">

							<input type="text" class="form-control" name="address" placeholder="Address" required="true">

						</div>

						<div class="form-group">

							<input type="submit" class="btn btn-primary" value="Sign Up">

						</div>

						<div id="message">
							<h3>Password must contain the following:</h3>
							<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
							<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
							<p id="number" class="invalid">A <b>number</b></p>
							<p id="length" class="invalid">Minimum <b>8 characters</b></p>
						</div>
					</form>

				</div>

			</div>

		</div>
		<br><br><br><br><br><br>

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