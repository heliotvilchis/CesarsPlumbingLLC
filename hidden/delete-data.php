<?php

//Credentials
$servername = "testphpserver";
$username = "root";
$password = "";
$dbname = "rating";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// sql to delete a record
$sql = "DELETE FROM rating WHERE rating=5";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
