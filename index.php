
<?php
//based on https://www.w3schools.com/php/php_mysql_create.asp

$servername = "localhost";
$username = "admin";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS TutorScheduleDB";
if ($conn->query($sql) === TRUE) {
    echo "TutorScheduleDB created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$sql = "CREATE TABLE LOGIN (
		Username VARCHAR(30) PRIMARY KEY,
		Password VARCHAR(30),
		User_SIN int(10) FOREIGN KEY
		)";
		
$conn->close();


?>