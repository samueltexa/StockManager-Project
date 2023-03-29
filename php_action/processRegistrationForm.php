<?php
include "db_connection.php";
  $username = $_POST['username'];
  $email = $_POST['email'];
  $district = $_POST['District'];
  $password = $_POST['password'];


//$errors = array();
//   if(strlen($_POST["password"])<5){
//     //stop the script with a suitable message name is required
//     $errors['u'] = "Password should be at least 6 characters"
//   }
//   //if password doesnt contain atleast a letter
//   if(!preg_match("/[a-z]/i", $_POST["password"])){
//     die("Password should contain atleast one letter");
//   }
//   //if password doesnt contain atleast a number
//   if(!preg_match("/[0-9]/", $_POST["password"])){
//     die("Password should contain atleast one number");
//   }
//   //if password matches theconfirmation password
//   if($_POST["password"] !==$_POST["confirmation_password"]){
//     die("Passwords don't match");
//   }

  $stmt = $connect->prepare("INSERT INTO users(UserName, Email, Address) VALUES(?, ?, ?)");
  $stmt->bind_param("sss", $username, $email, $district);
  $success = $stmt->execute();
   if($success == 1){
     echo "Registration successful";
     $stmt = $connect->prepare("INSERT INTO login(UserName, Password) VALUES(?, ?)");
     $stmt->bind_param("ss",$username, $password);
     $stmt->execute();
     header('location: http://localhost/StockManager/PageFiles/registrationsuccess.php');
     $stmt->close();
     $connect->close();
   }
   else{
       echo "<script> confirm('User name already taken')</script>";
       // header("location:register.php");
     }
     // print_r($_POST);
?>
