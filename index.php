<!DOCTYPE html>
<html lang="en">
<head>
    <h3 align="center">DATABASE SQL DELUCCA</h3>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/Cerca.js"></script>
    <script type="text/javascript" src="script/Ordina.js"></script>

    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    <form id="form"> </form>

    <script>
        $(document).ready(function()
        {
            $("#Aggiungi").click(function Aggiungi(){ $("#form").load('Inserimento.html'); $('#tabella').load('Select.php');});
        });
        function Delete(id){ $("#form").load('Delete.php?id='+ id); $('#tabella').load('Select.php');}
        function Update(id,nome,cognome,email){$("#form").load('Modifica.php?id='+ id +'&nome=' + nome+'&cognome='+ cognome +'&email=' + email);}
    </script>
</head>

<body onload="$('#tabella').load('Select.php');">
<div class="container">
    <button class="button" id="Aggiungi" data-toggle="tooltip" data-placement="top" title="Clicca per aggiungere un record"> <span class="glyphicon glyphicon-plus"></span> Aggiungi </button>
    <table class="table table-hover" id="tabella">
</div>
<p id="risultato" class="hidden">  </p>

    <br>
    <br>

<input type="search" onkeyup="Cerca(document.getElementById('mySearch'),document.getElementsByTagName('td'));" id="mySearch" placeholder="Cerca">

</body>
</html>