<!DOCTYPE html>
<html>
<head>
  <title>Create a new post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../static/css/myownstyles.css">
</head>

<!--?php //connect to the server
require_once('../config/constant.php');
?-->

<body>

  <!--<div id="header1">
            <a href="#" class="left-element">Create a new post!!!</a>
       </div>
-->
    <section class="postform">
      <form action="post_submit.php" method="POST">
           <br><br>
           <label for="ptitle">Title</label>
           <input type="text" id="ptitle" name="title"><br>
           <label for="pcontent">Content</label>
           <input type="text" id="pcontent" class="post_content" name="content"><br>

    <input type="submit" value="Submit">
  </form>
    </section>




</body>
</html>
