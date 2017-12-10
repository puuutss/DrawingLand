<!DOCTYPE html>
<?
include 'Insert.php';
?>
<html>

<head>
        <title>DrawingLand - Cadastro</title>
        <link rel = "shortcut icon" href = "favicon.ico">
        <link rel = "stylesheet" type:"text/css" href="Cadastro.css">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">     
</head>
<body>
        <div id="area">
                
                <form name = "cadastro" id = "cadastro" action = "Insert2.php" method = "POST">
                        
                        <label id = "label1">Nome de Usuario</label><br><input type="text" name="Nickname" id = "Nickname"><br>
                        <label id = "label2">Senha</label><br><input type="password" name="UserKey" id = "UserKey"><br>
                        
                        <input type="submit" value= "Cadastrar" name="sent" id = "input1">
                        
                        
                </form>
        </div>
</body>