<!DOCTYPE html>
<html>
	<head>
	<title>StockManager</title>
		<link rel="stylesheet" href="./custom/custom.css">
		<script src="custom/custom.js"></script>
	</head>
	<body>
		<meta name="viewport"
		content="=width=device-width,
		initial-scale=1.0">
		<form class="Forms" method="post" action="process">
	<hi class="account-display">ACCOUNT</hi>
    	<div>
      		<canvas class="canva" width="250" height="200"></canvas>
    	</div>
		<div class="container">
			<label>Email</label>
			<input type="text" placeholder="Enter email" name="Email" required>
			<label class="labels">Password</label>
			<input type="Password" placeholder="Input Password" name="Password" required>
		 	<button type="submit" class="btnlogin">Login</button>
			<p>Forgot<span><a href="forgotPassword">password? </a></span></p>
			<div class="noaccount">Don't have an acount?</div>
			<a class="link" href="register">Register</a>
		</div>
	</form>
	</body>
<html>
