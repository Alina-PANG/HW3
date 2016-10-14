<?php //login.php
session_start();
require_once('../config/constant.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $username = $_POST["name"];
  }
    if (empty($_POST["password"])) {
    $nameErr = "Password is required";
  } else {
    $password = $_POST["password"];
  }
}

select hashedPassword from users where username=?
$password2 = "SELECT password FROM tbl_users WHERE name='$username'";

if($password2 === $password){
  $_SESSION["success"] = true;
  $_SESSION["username"] = $username;
  $_SESSION["password"] = $password;
}
else{
  $_SESSION["success"] = false;
}

$conn->close();
?>
<?php
   require_once('../config/constant.php');
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
