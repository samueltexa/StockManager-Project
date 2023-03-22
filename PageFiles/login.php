<!DOCTYPE html>
<html>
	<head>
			<title>StockManager</title>
			<link rel="stylesheet" href="../custom/css/custom.css">
			<script src="./custom/custom.js"></script>
			</head>
	<body>
			<meta name="viewport"
			content="=width=device-width,
			initial-scale=1.0">
	<form class="Forms" method="post" action="process">
			<h1 class="account_display">Account Log in</h1>
    	<div>
      		<canvas class="canva" width="250" height="200"></canvas>
    </div>
		<div>
				<label>User name</label>
				<input type="text" placeholder="Enter your user name" name="username" required>
		</div>
		<div>
				<label class="labels">Password</label>
				<input type="Password" placeholder="Input Password" name="Password" required>
		 		<button type="submit" class="btnlogin">Login</button>
		</div>
				<p>Forgot<span><a href="forgotPassword">password? </a></span></p>
				<div class="noaccount">Don't have an acount?</div>
				<a class="link" href="registration">Register</a>
	</form>
	</body>
<html>
