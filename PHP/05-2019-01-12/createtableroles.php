<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB1";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "create table roles (
    id int primary key auto_increment,
    name varchar(50) unique
   )";
if (mysqli_query($conn, $sql)) {
    echo "Table roles created successfully";
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>