<?php 

include "db_connection.php";

// removing all session variables
session_unset(); 

// destroying the session 
session_destroy(); 

header('location: http://localhost/StockManager/PageFiles/login.php');

?>