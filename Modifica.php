<div class="container col-xs-10 col-lg-3">
    <label for="name">Nome:</label>
    <input type="text" name="nome" id="name" value="<?php echo $_GET['nome'] ?>" required>
    <label for="Cognome">Cognome:</label>
    <input type="text"  name="cognome" id="Cognome" value="<?php echo $_GET['cognome'] ?>" required>
    <label for="Email">Email:</label>
    <input type="email"  name="email" id="Email" value="<?php echo $_GET['email'] ?>" required>
    <input type="button" value="insert" onclick="$('#oggetto').load('Update.php?nome='+$('#name').val()+ '&cognome='+ $('#Cognome').val() + '&email=' +$('#Email').val() + '&id=' + '<?php echo $_GET['id'] ?>', function(){
            $('#tabella').load('Select.php');});" id="insert">
    <p id="oggetto"> </p>
</div>