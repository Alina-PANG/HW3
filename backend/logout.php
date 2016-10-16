<?php
   ob_start();
   session_start();
   session_unset();  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
   ob_end_flush();
   session_destroy();

   echo "Thanks, you have already logout";
   echo '<a href="../index.html">Go back to the Homepage</a>';

?>



<!--?php
session_start();

header('Refresh: 3;url=test.php');

$_SESSION['abc'] = $_SESSION['abc'] + 1;

echo $_SESSION['abc'];

?>
