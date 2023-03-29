<?php 
include "db_connection.php";
?>
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

            <div>Change Username</div>		
            <div class="form-group">
            <label for="username">Username</label>
                <input type="text" name="username" placeholder="Usename" value="<?php echo $result['username']; ?>"/>
            </div>
            <div class="form-group">
        
        </form>

				<form action="php_action/changePassword.php" method="post">
					<fieldset>
						<legend>Change Password</legend>

						<div class="changePasswordMessages"></div>
						<div class="form-group">
					    <label for="password">Current Password</label>
					      <input type="password"  id="password" name="password" placeholder="Current Password">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="npassword">New password</label>
					    <div class="col-sm-10">
					      <input type="password"  name="npassword" placeholder="New Password">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="cpassword" >Confirm Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
					    </div>
					  </div>
					  <div class="form-group">
					        <input type="hidden" name="user_id" id="user_id" value="<?php echo $result['user_id'] ?>" /> 
					      <button type="submit" class="btn btn-primary">Save Changes </button>
					    </div>
					  </div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>