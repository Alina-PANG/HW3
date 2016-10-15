<?php //login.php
ob_start();
session_start();
require_once('../config/constant.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["username"];
  }
    if (empty($_POST["password"])) {
    $nameErr = "Password is required";
  } else {
    $password = $_POST["password"];
  }
}

//to make them legal
$name = trim($_POST['username']);
$name = strip_tags($name);
$name = htmlspecialchars($name);

$password = trim($_POST['password']);
$password = strip_tags($password);
$password = htmlspecialchars($password);

$sql = "SELECT password FROM tbl_users WHERE name='$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $password2 = $row['password'];
}


if($password2 == $password){
  session_start();
  $_SESSION["username"] = $name;
  $_SESSION["password"] = $password;
  header("Location: ../view/personal_index.php");
}
else{
  echo "Login failed." . "</ br>";
  echo '<a href="../index.html">Go back to the Homepage</a>';

}
?>
