<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB1";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "create table users (
    id int primary key auto_increment,
    name varchar(50) unique,
    email varchar (255),
    password varchar(20),
    role int default 1,
    foreign key (role) references roles(id)
   )";
if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>