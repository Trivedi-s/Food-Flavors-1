<?php

// Establishing a database connection
$host = 'localhost'; // Your database host (e.g., localhost)
$username = ''; // Your database username
$password = ''; // Your database password

$conn = mysqli_connect($host, $username, $password);

// Checking the connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected<br>";

//Create db

$sql = "CREATE DATABASE foodflavours";

if(mysqli_query( $conn,$sql)){
echo "Database ff created successfully.";
 }
 else{
echo "Sorry, database creation failed ".mysqli_error($conn);
}
mysqli_close($conn);
?>