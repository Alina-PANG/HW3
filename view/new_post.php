<!DOCTYPE html>
<html>
<head>
  <title>Create a new post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../static/css/myownstyles.css">
</head>
<body>

  <div id="header1">
            <a href="#" class="left-element">Create a new post!!!</a> 
       </div> 

    <section class="postform">
      <form method="POST">
           <br><br>
           <label for="ptitle">Title</label>
           <input type="text" id="ptitle" name="title"><br>
           <label for="pcontent">Content</label>
           <input type="text" id="pcontent" class="post_content" name="content"><br>

    <input type="submit" value="Submit">
  </form>
    </section>

<?php //new post.php
   $servername = "localhost";
   $dbname = "blog";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"])) {
    $nameErr = "Title is required";
  } else {
    $title = $_POST["title"];
  }
}

$content = $_POST["content"];

require_once(../../constant.php);

$sql = "INSERT INTO Posts (title, create_date, content)
VALUES ($title, date(Y-m-d), $content)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
