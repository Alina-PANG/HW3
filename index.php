<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="static/css/myownstyles.css">
	<title>Alina's Blog</title>
</head>
<body>
    
    <!--This is the section of the first row-->
  
       <div id="header1">
            <a href="#" class="left-element">Welcome, friend!</a> 
            <a href="view/login_form.html" class="right-element">Sign in</a>
            <a href="view/register_form.html" class="right-element secElement">Register</a>
       </div> 	
    <section class="headers">
       <div class="header2">
            <div>
        	      <p>Alina's Blog</p>
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
               <li><a href="">25 Sept, 2016</a></li>
               <li><a href="">Login</a></li>
               <li><a href="">Leave a comment</a></li>
               <li><a href="">Message</a></li>
            </ul>
            <div class="part2">
                <p>
                    Content
                </p>
                
                  <?php
                     header("Location: view/content.php");
                     exit;
                  ?>

            </div>
        </div>


        <div class="content">
            <div id="conbody">
                This is the first post.
            </div>
        </div>

     </section>
</body>
</html>