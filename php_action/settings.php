<!DOCTYPE html>
	<head>
		<title>Stock Management Sysystem</title>
	<link rel="stylesheet" href="../sourcefolder/css/dashboard.css">
	</head>
	<body>
		<div class="home">
		  <a class="homelink"href="../PageFiles/dashboard.php">Home</a>
		  <hi class="homelink">/ Settings</hi>
		</div>
		<div class="settings">
		<form class="settings_form">
			<div class="settings_title">Change Settings</div>
			<div>
				<label class="usertext"for="username">Username</label>
				<input id="usertext" type="text" name="username" placeholder="Enter your Usename" required>
			</div>
			<div>
				<label class="passwordtext" for="password">Current Password</label>
				<input type="password"  id="passwordtext" name="password" placeholder="Current Password" required>
			</div>
			<div>
				<label class="passwordtext" for="npassword">New password</label>
				<input id="passwordtext" type="password"  name="npassword" placeholder="New Password">
			</div>
			<div>
				<label class="passwordtext" for="cpassword" >Confirm Password</label>
				<input type="password" id="passwordtext" name="cpassword" placeholder="Confirm Password">
			</div>
				<button class="savechanges" type="submit" class="btn btn-primary">Save Changes </button>
			</form>
		</div>
		</body>
</html>