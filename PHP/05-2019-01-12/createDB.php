<?php
$serverName = "localhost";
$userName = "root";
$password = "";
//create connection
$conn = mysqli_connect($serverName, $userName, $password);
if(!$conn) {
    die("Connetcion failed: " . mysqli_connect_error());
}
// Create database
$sql = "create database myDB1";
if(mysqli_query($conn, $sql)) {
    echo "Database Created successfully";
}
else {
    echo "Error Creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>