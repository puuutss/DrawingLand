<html>
<head>
        <title>DrawingLand - Cadastro</title>
        <link rel = "stylesheet" type:"text/css" href="Cadastro.css">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <?php include('Insert.php')?>
</head>
<body>
        <div id="area">
                <form name = "cadastro" id = "cadastro" action = "Insert.php" method = "post">
  
                        <label id = "label1">Nome de Usuario</label><br><input type="text" name="Nickname" id = "input2"><br>
                        <label id = "label2">Senha</label><br><input type="password" name="UserKey" id = "input2"><br>
                        <input type="submit" value= "Cadastrar" name="sent" id = "input1">
  
                </form>
        </div>
</body>