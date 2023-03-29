<?php require "../php_action/db_connection.php"; ?>
<?php require_once "../Footer_Header/topheaders.php"; ?>
<?php
$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;
$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;
$totalRevenue = "";
while ($orderResult = $orderQuery->fetch_assoc()) {
      $totalRevenue = $orderResult['paid'];
}
$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;
$connect->close();
?>
<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../sourcefolder/css/dashboard.css">
    </head>
    <body>
    	<div class="navigbar">
			<div id="com">
    		  <a href="product.php">TOTAL PRODUCTS
    		  <span><?php echo $countProduct; ?></span></a>
		</div>
    		<a href="orders.php?o=manord">TOTAL ORDERS
    		<span><?php echo $countOrder; ?></span></a>
    			<a href="product.php">LOW STOCK
    			<span><?php echo $countLowStock; ?></span></a>
    	</div>
    	<div class="date">
    		  <h1><?php echo date('d'); ?></h1>
    	</div>
    	<div class="days">
    		   <p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
    	</div>
    	<div class="Revenue">
    		  <h1><?php if($totalRevenue) {
    		   echo $totalRevenue;
    		    	}else {
    		    	echo '0';
    		    	} ?></h1>
    	</div>
    	<div class="totalRevenue">
    		  <p>$ Total Revenue</p>
    	 </div>
   </body>
</html>
