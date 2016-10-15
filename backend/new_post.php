<?php //login.php
session_start();
require_once('../config/constant.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["title"])) {
    $nameErr = "Title is required";
  } else {
    $name = $_POST["username"];
  }
}

//to make them legal
$title = trim($_POST['title']);
$title = strip_tags($title);
$title = htmlspecialchars($title);

date_default_timezone_set("Asia/Singapore");
$date = date("Y-m-d");
$time = date("h:i:s");

$sql = "INSERT INTO tbl_users VALUES ('$name', '$password', '$email', '$date', '$time', '$country')";
  echo '<a href="../index.html">Go back to the Homepage</a>';

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


}
?>
