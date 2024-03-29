<?php
// Connect to MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "project_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$author_name = $_POST['author_name'];
// Process other personal details here

// Insert personal details into database
$sql = "INSERT INTO personal_details (author_name, ...) VALUES ('$author_name', ...)";
if ($conn->query($sql) === TRUE) {
    echo "Personal details inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
