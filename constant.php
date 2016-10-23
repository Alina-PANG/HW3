
<?php
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
      echo "Sorry but there're some problems in connecting the database.";
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	} 
	
?>

