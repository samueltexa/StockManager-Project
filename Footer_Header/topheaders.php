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
	<div class="header">
	<a href="dashboard.php">DASHBOARD</a>
        <a href="brand.php">BRAND</a>
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
        		<a href="../php_action/settings.php">SETTINGS</a>
        		<a href="../php_action/logout.php">LOGOUT</a>
			</div>
		</div>
		<div class="drop">
      <button class="data"><i class="fa fa-bars"></i></button>
      <div class="cont">
	  <a href="brand.php">BRAND</a>
        <a href="categories.php">CATEGORY</a>
        <a href="product.php">PRODUCT</a>
		<a href="report.php">REPORT</a>
    </div>
    </div>
	 </div>
	</body>
</html>
