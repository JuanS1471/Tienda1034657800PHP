<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="tienda";
$puerto=3306;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname,$puerto);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>