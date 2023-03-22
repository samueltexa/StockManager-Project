<?php
session_start();
require "db_connection.php";
// echo $_SESSION['userId'];
if(!$_SESSION['userId']) {
	header('location: http://localhost/StockManager/PageFiles/login.php');
}
?>
