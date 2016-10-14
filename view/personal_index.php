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
        	      <p><!--?php 
                   if($_SESSION['username'] != null){
                     echo $_SESSION['username'] . "'s Blog";
                   }
                   else{
                     echo "Please Login First";
                   }
                   ?>-->
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

              <?php

         

               $sql = "SELECT * FROM tbl_posts";
               $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
              echo $row["id"]."<br>";
              echo $row["title"]."<br>";
              echo $row["content"]."<br>";
            }
        } 
      else {
            echo "No content";
      }
      $conn->close();

/*              
require_once('../config/constant.php');
//second
$result = mysql_query("SELECT * FROM tbl_posts");
echo $result;

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("ID: %d  Title: %s", $row[0], $row[2]);  
}*/
     ?>
            </div>
        </div>

     </section>
</body>
</html>