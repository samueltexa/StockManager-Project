<?php
require "db_connection.php";
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';
$sql = "SELECT product.product_id, product.product_name, product.product_image, product.brand_id,
        product.categories_id, product.quantity, product.rate, product.active, product.status,
        brands.brand_name, categories.categories_name FROM product
        INNER JOIN brands ON product.brand_id = brands.brand_id
        INNER JOIN categories ON product.categories_id = categories.categories_id ";
if (!empty($searchTerm)) {
    $sql .= "WHERE product.status = 1 AND (product.product_name LIKE '%$searchTerm%' OR brands.brand_name LIKE '%$searchTerm%' OR categories.categories_name LIKE '%$searchTerm%')";
} else {
    $sql .= "WHERE product.status = 1";
}
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    echo "<table id='search-results'>";
    echo "<tr>";
    echo "<th>Product Image</th>";
    echo "<th>Product Name</th>";
    echo "<th>Rate</th>";
    echo "<th>Quantity</th>";
    echo "<th>Brand</th>";
    echo "<th>Category</th>";
    echo "<th>Status</th>";
    echo "</tr>";
            while($row = $result->fetch_array()) {
                $productId = $row[0];
                $productImage = $row[2];
                $product_name = $row[1];
                $rate = $row[6];
                $quantity = $row[5];
                $brand = $row[9];
                $category = $row[10];
                $status = $row[8];
                
                // echo the table row
                echo "<tr>";
                echo "<td><img src='" . $productImage . "' alt='image cannot be displayed" . $product_name . "' style='width:100px;height:100px;'></td>";
                echo "<td>" . $product_name . "</td>";
                echo "<td>" . $rate . "</td>";
                echo "<td>" . $quantity . "</td>";
                echo "<td>" . $brand . "</td>";
                echo "<td>" . $category . "</td>";
                echo "<td>" . $status . "</td>";
                echo "</tr>";
            }
    echo "</table>";
} else {
    echo "No results found.";
}
$connect->close();
?>
