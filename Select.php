<?php
include "CollegamentoSQL.php";                          //""...
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
$sql = "SELECT * FROM registro";
$result = $conn->query($sql);
echo "
    <thead>
        <tr>
            <th onclick=\"Ordina('id')\">ID</th>
            <th onclick=\"Ordina('nome')\">Nome</th>
            <th onclick=\"Ordina('cognome')\">Cognome</th>
            <th onclick=\"Ordina('email')\">Email</th>
        </tr>
    </thead>
<p id=\"risultato\" class=\"hidden\">  </p>";

while ($row = $result->fetch_assoc())
{
    $ID = $row['Id'];
    $NOME= $row['Nome'];
    $COGNOME = $row['Cognome'];
    $EMAIL = $row['Email'];

    echo "<tr>";
    echo "<td name = 'id'>" . $ID . "</td>";
    echo "<td name='nome'>" . $NOME . "</td>";
    echo "<td name='cognome'>" . $COGNOME . "</td>";
    echo "<td name='email'>" . $EMAIL . "</td>";

    echo "<td><button type=\"button\" class=\"btn btn-primary\" id=\"Update\" onclick=\"Update('$ID','$NOME','$COGNOME','$EMAIL')\" data-toggle=\"tooltip\" title=\"Clicca per aggiornare questa riga\"> <span class=\"glyphicons glyphicons-restart\"> </span> Update </button> </td>>";
    echo "<td><button type=\"button\" class=\"btn btn-danger\"  id=\"Delete\" onclick=\"Delete('$ID')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Clicca per eliminare questa riga\"> <span class=\"glyphicons glyphicons-restart\"> </span> Delete </button> </td>";
    echo "</tr>";
}
$conn->close();