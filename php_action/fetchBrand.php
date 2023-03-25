<?php
require "db_connection.php";
$sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Brand Name</th>";
    echo "<th>Status</th>";
    echo "</tr>";
	while($row = $result->fetch_array()) {
		$productId = $row[0];
		$brand_name = $row[1];
		$brand_status = $row[3];
		$class = $brand_status == 1 ? "available" : "unavailable";
		// echo the table row
		  echo "<tr>";
		  echo "<td>" . $brand_name . "</td>";
		  echo "<td class='" . $class . "'>" . ($brand_status == 1 ? "Available" : "Unavailable") . "</td>";
		  echo "</tr>";
	  }
echo "</table>";
} else {
echo "Query failed";
}
$connect->close();
//print_r($_POST);