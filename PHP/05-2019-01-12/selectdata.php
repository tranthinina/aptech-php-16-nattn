<?php
$serverName = "localhost";
$usersName = "root";
$password = "";
$dbName = "myDB1";
$conn = mysqli_connect($serverName, $usersName, $password, $dbName);
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
$sql ="select id, name, email from users";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
}
else {
    echo "0 results";
}
mysqli_close($conn);
?>