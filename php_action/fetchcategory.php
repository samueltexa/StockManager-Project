<?php 	
require "db_connection.php";
$sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Category Name</th>";
    echo "<th>Status</th>";
    echo "</tr>";
    while($row = $result->fetch_array()) {
		$categoriesId = $row[0];
		$categories_name = $row[1];
		$categories_status = $row[3];
		$class = $categories_status == 1 ? "available" : "unavailable";
		// echo the table row
		  echo "<tr>";
		  echo "<td>" . $categories_name . "</td>";
		  echo "<td class='" . $class . "'>" . ($categories_status == 1 ? "Available" : "Unavailable") . "</td>";
		  echo "</tr>";
	  }
echo "</table>";
} else {
echo "No product Category to display, add product category";
}
$connect->close();
//print_r($_POST);