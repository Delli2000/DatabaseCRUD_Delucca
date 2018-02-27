<?php
if($_GET['nome']!="" && $_GET['cognome']!="" && $_GET['email']!="")       //controlla che siano stati impostati tutti i parametri
{
    include "CollegamentoSQL.php";      //si collega al file php che effettua la connessione al database
    if ($conn->connect_error)           //Verifica che non vi siano stati problemi durante la connessione (impossibilità di stabilirla)
        die("Connection failed: " . $conn->connect_error);
                                    //Passaggio/acquisizione parametri e conseguente settaggio delle variabili che li ospiteranno
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $email = $_GET['email'];

    $sql = "INSERT INTO registro ( Nome, Cognome, Email) VALUES ('$nome', '$cognome', '$email')";

    if ($conn->query($sql) != TRUE)                     // dopo aver eseguito la query controlla che non vi siano stati errori durante l'inserimento dei dati
        echo "Error: " . $sql . "<br>" . $conn->error;

    $conn->close();                                     //chiude la connessione
    echo "<script> Aggiunta_Visibile (); </script>";    //richiama la funzione javascript che toglie visibilità ai campi di inserimento
}