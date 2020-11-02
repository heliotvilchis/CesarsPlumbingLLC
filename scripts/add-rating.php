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

//Insert new product to database
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // sql insert in RATING
    $rating = $_POST["rating"];;
    $cname = $_POST["cname"];
    $details = $_POST["details"];

    //insert in categories
    $sql = "INSERT INTO rating (Rating, Name, Details)
        VALUES ('{$rating}', '{$cname}', '{$details}')";

    //data validation
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

header("Location: /testimonials.html");

//close connection
$conn->close();
