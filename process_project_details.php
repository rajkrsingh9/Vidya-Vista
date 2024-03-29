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
$project_type = $_POST['project_type'];
// Process other project details here

// Insert project details into database
$sql = "INSERT INTO project_details (project_type, ...) VALUES ('$project_type', ...)";
if ($conn->query($sql) === TRUE) {
    echo "Project details inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
