<?php

// Connect to AWS RDS database  
$host = "sql6.freesqldatabase.com";
$username = "sql6705993";
$password = "4RB6CLp2T7";
$dbname = "sql6705993";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  username VARCHAR(50) NOT NULL,
  phone VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
echo "Table users created successfully";
} else {
echo "Error creating table: " . $conn->error;
}

$conn->close();
