<?php
$dbhost = "Preney Piracy";
$dbuser = "your_username";
$dbpass = "your_password";
$dbname = "your_database_name";
// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
} else {
 echo "Error creating database: " . $conn->error;
}
$conn->select_db($dbname);
$sql = "CREATE TABLE IF NOT EXISTS Users (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(30) NOT NULL,
 email VARCHAR(50) NOT NULL,
 password VARCHAR(255) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
 echo "Table Users created successfully";
} else {
 echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE IF NOT EXISTS Files (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 filename VARCHAR(255) NOT NULL,
 path VARCHAR(255) NOT NULL,
 uploaded_by INT(6) UNSIGNED,
 uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY (uploaded_by) REFERENCES Users(id)
)";
if ($conn->query($sql) === TRUE) {
 echo "Table Files created successfully";
} else {
 echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
