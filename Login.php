<html>

<head>
        <title>DrawingLand - Login</title>
        
        <link rel = "stylesheet" type:"text/css" href="Login.css">
        <link href="font.tff" rel="stylesheet">
</head>
<body>
        <div id="area">
                
                <form name = "cadastro" id = "cadastro" method= "POST" action = "LoginDBConnect.php">
                        
                        <label id = "label1">Nome de Usuario</label><br><input type="text" name="Nickname" id = "Nickname" value = "Exemplo: Joaozinho" placeholder = "Digite seu Nickname"><br>
                        <label id = "label2">Senha</label><br><input type="password" name="UserKey" id = "UserKey" value = "CuriosoDemaisVoce" placeholder = "Digite sua senha"><br>
                        
                        <input type="submit" value= "Login" name="sent" id = "input1">
                        
                 </form>
                 <form name = "redirect" id = "redirect" action = "Cadastro.php">
                         <input type="submit" value= "Cadastrar-se" name="Redirect" id = "input3" onSubmit = "Cadastro.php">
                 </form>
        </div>
</body>