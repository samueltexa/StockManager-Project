<!DOCTYPE html>
<html>
	<head>
			<title>StockManager</title>
			<link rel="stylesheet" href="../sourcefolder/css/custom.css">
			<script src="../sourcefolder/javascript/scripts.js" defer></script>
			
	</head>
	<body>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<form class="Forms" id="login-form" method="POST" action="../php_action/processlogin.php">
			<h1 class="account_display">Account Log in</h1>
			<div>
				<label>User name</label>
				<input type="text" placeholder="Enter your user name" name="username">
				<div class="error"></div>
			</div>
			<div>
				<label class="labels">Password</label>
				<input type="Password" placeholder="Input Password" name="password">
				<div class="error"></div>
			</div>
			<input type="submit" class="btnlogin" value="Login">
			<div class="forgot-password">Forgot <a href="forgotPassword">password?</a></div>
			<div class="noaccount">Don't have an account?</div>
			<a class="link" href="registration">Register</a>
		</form>
	</body>
</html>
