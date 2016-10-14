<?php //login.php
require_once(../config/constant.php);

$sql = "INSERT INTO Users (firstname, lastname, username, password, country)
VALUES ($firstname, $lastname, $username, $password, $country)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


INSERT INTO tbl_users VALUES ('admin', '19980312', '2016-10-14', 'China');
