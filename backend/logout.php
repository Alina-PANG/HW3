<?php
   session_destroy();
   echo "Thanks, you have already logout";
?>

<?php 
session_start();
 
header('Refresh: 3;url=test.php');
 
$_SESSION['abc'] = $_SESSION['abc'] + 1;
 
echo $_SESSION['abc'];
 
?>

