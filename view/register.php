<?php //login.php
   $servername = "localhost";
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $country = $_POST["country"];
   $dbname = "blog";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $username = $_POST["username"];
  }
    if (empty($_POST["password"])) {
    $nameErr = "Password is required";
  } else {
    $password = $_POST["password"];
  }
}

// Create connection
$conn = mysql_connect($servername, "", "");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Users (firstname, lastname, username, password, country)
VALUES ($firstname, $lastname, $username, $password, $country)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>