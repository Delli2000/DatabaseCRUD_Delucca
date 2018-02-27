<?php
if($_GET['nome']!="" && $_GET['cognome']!="" && $_GET['email']!="")       //controlla che siano stati impostati tutti i parametri
{
    include "CollegamentoSQL.php";
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
    echo "<script> Aggiunta_Visibile (); </script>";
}