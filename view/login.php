<?php //login.php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {  
      $error = "Username or Password is invalid";
    else{
      $_SESSION['username'] = $_POST['username'];
    }
  }
 /*if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $username = $_POST["name"];
  }
    if (empty($_POST["password"])) {
    $nameErr = "Password is required";
  } else {
    $password = $_POST["password"];
  }*/
}

require_once('../config/constant.php');

$sql = "INSERT INTO Users (firstname, lastname, username, password, country)
VALUES ($firstname, $lastname, $username, $password, $country)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>