<?php
   require_once 'login.php';
   $db_server = mysql_connect($db_hostname, $db_username, $db_password);
   if(!$db_server) die("Unable to connect to MYSQL:" . mysql_fatal_error());

   function mysql_fatal_error($msg){
	   $msg2 = mysql_error();
	   echo 'Sorry, the error message is <p>$msg: $msg2</p>'
   }

   mysql_select_db($db_database)
       or die("Unable to connect to MYSQL:" . mysql_fatal_error());

   $query = "SELECT * FROM id";
   $result = mysql_query($query);

   if(!$result) die ("Database access failed: ". mysql_error());

   $rows = mysql_num_rows($result);

   for
?>