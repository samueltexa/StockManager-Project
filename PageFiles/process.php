<?php
// $mysqli = require __DIR__ . "/database.php";
include "database.php";
  // query for selecting cities from the database
$query = "SELECT * FROM cities;";
$rs = $conn->query($query);
foreach($rs as $result){
echo "<option value=".$result["City"].">".$result["City"]."</option>";
}
