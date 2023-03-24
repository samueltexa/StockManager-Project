<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stock Management System</title>
  <link rel="stylesheet" href="../custom/css/dashboard.css">
  <script src="../custom/custom.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header" id="myheader">
      	<a href="dashboard.php" class="active">DASHBOARD</a>
        <a href="brand.php">BRAND</a></li>
        <a href="categories.php">CATEGORY</a>
        <a href="product.php">PRODUCT</a>
		<a href="report.php">REPORT</a>
		<div class="dropdown">
        	<button class="dropbtn">ORDERS
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="orders.php?o=add">ADD ORDERS</a>
				<a href="orders.php?o=manord">MANAGE ORDERS</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">ACCOUNT
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
        		<a href="setting.php">SETTINGS</a>
        		<a href="logout.php">LOGOUT</a>
			</div>
		</div>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <i class="fa fa-bars"></i></a>
	 </div>
	</body>
</html>
