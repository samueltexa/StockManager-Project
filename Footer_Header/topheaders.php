<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stock Management System</title>
  <link rel="stylesheet" href="../custom/css/dashboard.css">
  <script src="../custom/custom.js"></script>
</head>
<body>
	<div class="header" id="myheader">
      <ul>
      	<a href="dashboard.php" class="active">DASHBOARD</a>
        <a href="brand.php">BRAND</a></li>
        <a href="categories.php">CATEGORY</a>
        <a href="product.php">PRODUCT</a>
				<div class="dropdown">
        <button class="dropbtn">ORDERS</button>
				<div class="dropdown-content">
					<a href="orders.php?o=add">ADD ORDERS</a>
					<a href="orders.php?o=manord">MANAGE ORDERS</a>
				</div>
				</div>
				<a href="report.php">REPORT</a>
				<div class="dropdown">
						<button class="dropbtn">ACCOUNT</button>
					<div class="dropdown-content">
        		<a href="setting.php">SETTINGS</a>
        		<a href="logout.php">LOGOUT</a>
				</div>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <i class="fa fa-bars"></i></a>
				</div>
	 </div>
	</body>
</html>
