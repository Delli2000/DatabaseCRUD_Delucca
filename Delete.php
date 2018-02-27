<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databaseamatidelucca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Id=$_GET['id'];

$sql = "DELETE FROM registro WHERE Id=$Id";

if ($conn->query($sql) != TRUE)
    echo "Error deleting record: " . $conn->error;

$conn->close();

?>

