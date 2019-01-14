<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB1";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "DELETE FROM roles WHERE id=3";

if (mysqli_query($conn, $sql1)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
$sql2 = "DELETE FROM roles WHERE id=1";

if (mysqli_query($conn, $sql2)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
$sql3 = "DELETE FROM roles WHERE id=2";

if (mysqli_query($conn, $sql3)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
$sql4 = "DELETE FROM roles WHERE id=4";

if (mysqli_query($conn, $sql4)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>