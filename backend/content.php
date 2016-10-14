<!DOCTYPE html>
<html>
<head>
  <title>Create a new post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../static/css/myownstyles.css">
</head>
<body>

<section class="postform">
<?php //new post.php
   require_once(../../constant.php);
   $sql = "SELECT title FROM Posts;";
   echo "<div class=\"directory\">$sql</div>";
$conn->close();
?>
</section>
</body>
</html>
