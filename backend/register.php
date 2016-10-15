<?php //login.php
ob_start();
session_start();
  if( isset($_SESSION['username'])!="" ){
   header("Location: personal_index.php");
 }
  require_once('../config/constant.php');

  //validation of userful informaiton
  $name = trim($_POST['username']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $country = $_POST['country'];

  #username validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
 }

 /*else {
   #check whether the username already exist or not
   $query = "SELECT name FROM tbl_users WHERE name='$name'";
     $result = mysql_query($query);
     $count = mysql_num_rows($result);
     if($count!=0){
      $error = true;
      $nameError = "This user has already exist, please change into another one";
     }
 }*/

  #password validation
  if (empty($password)){
   $error = true;
   $passError = "Please enter password.";
 } else if(strlen($password) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }

  #basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    $error = true;
   $emailError = "Please enter valid email address.";
  }
/*   # check email exist or not
 $query = "SELECT userEmail FROM tbl_users WHERE email='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
 }*/

  //get today' date
  date_default_timezone_set("Asia/Singapore");
  $date = date("Y-m-d");
  $time = date("h:i:s");

  //insertion
  $sql = "INSERT INTO tbl_users VALUES ('$name', '$password', '$email', '$date', '$time', '$country')";

/*
  if(!mysql_query($sql, $db_server)){
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
*/

/*  if(error == true){
    echo "Please redo the form </ br>";
    echo $nameError;
    echo $passError;
    echo $emailError;
  }
  else */
  if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['username'] = $name;
    $_SESSION['date'] = $date;
    $_SESSION['time'] = $time;
    $_SESSION['country'] = $country;
    header("Location: ../view/personal_index.php");
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>
