<!--?php
  session_start();
?>-->
<?php
      require_once ('../config/constant.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../static/css/myownstyles.css">
	<title>Your Home Page</title>
</head>
<body>

    <!--This is the section of the first row-->

       <div id="header1">
            <a href="#" class="left-element">Welcome, friend!</a>
            <a href="backend/logout.php" class="right-element">Log out</a>
       </div>
    <section class="headers">
       <div class="header2">
            <div>
        	      <p>
                <?php
    $sql = "SELECT name FROM tbl_users";
    $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
          echo $row["name"] . "'s Blog";
        }
  else {
        echo "Empty String";
  }
  $conn->close();
                   ?>
                 </p>
                <hr>
        	</div>
      </div>
      <div class="header3">
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="" class="secElement">About</a>
            </li>
            <li>
                <a href="" class="secElement">Contact</a>
            </li>
        </ul>

      </div>
    </section>

     <!--Main contains-->
     <section class="main-part">
        <div class="left-nav part1">
            <ul>
               <li><a href="view/new_post.php">Create a new Post</a></li>
               <li><a href=""><?php
                 date_default_timezone_set("Asia/Singapore");
                 echo date("Y-m-d") . "<br>" . date("l") . "<br>" . date("h:i:sa") . "<br>";
                 for($i=0;$i<3;$i++){
                    echo "<br>";
                 }
               ?></a></li>
               <li><a href="">Friends</a></li>
               <li><a href="">Comments</a></li>
               <li><a href="">Messages</a></li>
            </ul>
            <div class="part2">
                <p>
                    Content
                </p>

            </div>
        </div>


        <div class="content">
            <div id="conbody">




            </div>
        </div>

     </section>
</body>
</html>
