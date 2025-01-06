<?php
$servername = "localhost";
$username = "root";   // Default for XAMPP
$password = "";       // Default for XAMPP
$database = "to-do";  // Database name, ensure it matches

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
{
    //echo"Hey, Connection established!";
}
?>
