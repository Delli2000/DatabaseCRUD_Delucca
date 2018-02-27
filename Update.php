<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databaseamatidelucca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_GET['nome'];
$cognome = $_GET['cognome'];
$email = $_GET['email'];
$Id = $_GET['id'];

$sql = "UPDATE registro SET Nome='$name', Cognome='$cognome', Email='$email' WHERE Id='$Id'";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
echo "<script> Modifica_Visibile (); </script>";
