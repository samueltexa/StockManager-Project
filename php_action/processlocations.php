<?php
require "db_connection.php";
//require_once "../php_action/db_connection.php";
//include "../php_action/db_connection.php";

  // query for selecting cities from the database
$query = "SELECT * FROM location;";
$rs = $conn->query($query);
foreach($rs as $result){
echo "<option value=".$result["Locations"].">".$result["Locations"]."</option>";
}
?>
