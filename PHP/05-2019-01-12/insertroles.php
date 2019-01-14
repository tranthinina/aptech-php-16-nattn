<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB1";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "insert into roles (name) values ('Director'), ('Teacher'), ('Student')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
