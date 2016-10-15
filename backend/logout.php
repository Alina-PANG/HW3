

<?php
   session_start();
   ob_end_flush();
   session_destroy();

   echo "Thanks, you have already logout";

?>


<?php
  echo '<a href="../index.html">Go back to the Homepage</a>';
 ?>
<!--?php
session_start();

header('Refresh: 3;url=test.php');

$_SESSION['abc'] = $_SESSION['abc'] + 1;

echo $_SESSION['abc'];

?>
