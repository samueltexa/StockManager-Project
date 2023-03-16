<?php
include "database.php";
  $firstName =$_POST['firstName'];
  $lastName =$_POST['lastName'];
  $email =$_POST['email'];
  $district =$_POST['District'];
  $password =$_POST['password'];


$errors = array();
  if(strlen($_POST["password"])<5){
    //stop the script with a suitable message name is required
    $errors['u'] = "Password should be at least 6 characters"
  }
  //if password doesnt contain atleast a letter
  if(!preg_match("/[a-z]/i", $_POST["password"])){
    die("Password should contain atleast one letter");
  }
  //if password doesnt contain atleast a number
  if(!preg_match("/[0-9]/", $_POST["password"])){
    die("Password should contain atleast one number");
  }
  //if password matches theconfirmation password
  if($_POST["password"] !==$_POST["confirmation_password"]){
    die("Passwords don't match");
  }

  $stmt = $conn->prepare("INSERT INTO user(FirstName, LastName, UserEmail, City) VALUES(?, ?, ?, ?)");
  $stmt->bind_param("ssss", $firstName, $lastName, $email, $district);
  $success = $stmt->execute();
   if($success == 1){
     echo "Registration successful";
     $stmt = $conn->prepare("INSERT INTO login(Password) VALUES(?)");
     $stmt->bind_param("s", $password);
     $stmt->execute();
     header("location:registrationsuccess.php");
     $stmt->close();
     $conn->close();
   }
   else{
       echo "<script> alert('Email already exists!')</script>";
       header("location:register.php");
     }
     // print_r($_POST);
?>
