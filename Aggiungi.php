<?php
if($_GET['nome']!=null && $_GET['cognome']!=null && $_GET['email']!=null)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "databaseamatidelucca";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);

    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $email = $_GET['email'];

    $sql = "INSERT INTO registro ( Nome, Cognome, Email) VALUES ('$nome', '$cognome', '$email')";

    if ($conn->query($sql) != TRUE)
        echo "Error: " . $sql . "<br>" . $conn->error;

    $conn->close();
}