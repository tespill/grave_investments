<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Grave Investments";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (id, username, password, email,fullName)
VALUES ('1','John', 'Doe', 'john@example.com','you mo')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();