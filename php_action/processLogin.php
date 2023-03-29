<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    // including database connection
    require_once '../php_action/db_connection.php';

    // getting input values
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    // querying to check if username and password exist
    $query = "SELECT * FROM login WHERE UserName = '$username' AND Password = '$password'";
    $result = mysqli_query($connect, $query);

    // checking if query was successful and user exists
    if (mysqli_num_rows($result) == 1) {
        // user exists, set session variables and redirect to dashboard
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['LoginID'];
        $_SESSION['username'] = $row['UserName'];
        header('location: http://localhost/StockManager/PageFiles/dashboard.php');
        exit();
    } else {
        //if username or password is incorrect, show error message
        echo "Invalid username or password. Please try again.";
    }

    // close database connection
    mysqli_close($connect);
} else {
    // username or password was not set, redirect to login page
    //header('Location: login.php');
    exit();
}
?> 