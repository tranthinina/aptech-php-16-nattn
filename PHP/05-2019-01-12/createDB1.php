<?php
$serverName = "localhost";
$userName = "userName";
$password = "";
// create connection
$conn = mysqli_connect($serverName, $userName, $password);
// check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// create database
$sql = "create database myDB";
if(mysqli_query($conn, $sql)) {
    echo "Database created successfully";
}
else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>