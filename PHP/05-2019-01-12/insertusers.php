<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB1";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "insert into users (name, email, password, role) values ('Na','na@gmail.com', 123, 5), ('Na1','na1@gmail.com', 1234, 6), ('Na2','na2@gmail.com', 1231, 5), ('Na4','na4@gmail.com', 1233, 7)";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>