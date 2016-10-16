<?php //login.php
ob_start();
session_start();
require_once('../config/constant.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["title"])) {
    $titleErr = "Title is required";
  } else {
    $title = $_POST["title"];
  }
}

if( isset($_SESSION['username'])=="" ){
 header("Location: ../index.html");
}

//to make them legal
$title = trim($_POST['title']);
$title = strip_tags($title);
$title = htmlspecialchars($title);

$content = trim($_POST['content']);
$content = strip_tags($content);
$content = htmlspecialchars($content);

date_default_timezone_set("Asia/Singapore");
$date = date("Y-m-d");
$time = date("h:i:s");

$status = $_POST['status'];
$name = $_SESSION['username'];

$sql = "INSERT INTO tbl_posts VALUES (NULL, '$name', '$title', '$content', $status, '$date', '$time')";

if ($conn->query($sql) === TRUE) {
  session_start();
  $_SESSION['username'] = $name;
  $_SESSION['status'] = $status;
  header("Location: ../view/personal_index.php");
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
