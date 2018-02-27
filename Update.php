<?php
if($_GET['nome']!="" && $_GET['cognome']!="" && $_GET['email']!="" && $_GET['id']!="")       //controlla che siano stati impostati tutti i parametri
{
    include "CollegamentoSQL.php";      //""...
    if ($conn->connect_error)           //Verifica che non vi siano stati problemi durante la connessione (impossibilità di stabilirla)
        die("Connection failed: " . $conn->connect_error);
                                    //Passaggio/acquisizione parametri e conseguente settaggio delle variabili che li ospiteranno
    $name = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $email = $_GET['email'];
    $Id = $_GET['id'];

    $sql = "UPDATE registro SET Nome='$name', Cognome='$cognome', Email='$email' WHERE Id='$Id'";   //Effettua l'aggiornamento dei dati del record in questione (tramite l'id)

    if ($conn->query($sql) != TRUE)                     // dopo aver eseguito la query controlla che non vi siano stati errori durante l'aggiornamento dei dati
        echo "Error updating record: " . $conn->error;
    $conn->close();                                     //chiude la connessione
    echo "<script> Modifica_Visibile (); </script>";    //richiama la funzione javascript che toglie visibilità ai campi di modifica
}