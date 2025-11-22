<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Database_TP";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>