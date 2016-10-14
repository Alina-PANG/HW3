<?php
//create a new record in the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"])) {
    $nameErr = "Title is required";
  } 
  else {
    $title = $_POST["title"];
  }
}

$content = $_POST["content"];


$sql = "INSERT INTO Posts (title, create_date, content)
VALUES ($title, date(Y-m-d), $content)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>