<!DOCTYPE html>
<html>
<head>
        <title>Nova Postagem</title>
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Sue+Ellen+Francisco" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link rel = "stylesheet" type = "text/css" href = "NewPost.css">
</head>
<body>
        <div id="label">
                <form name = "Logged User" id = "form">
                        <input type = "text" id = "UserLogged" value = "<? $User = $_SESSION['username'] ?>">
                        <input type = "submit" id = "logoutinput" value = "Logout" action = "Logout.php">
                </form>
        </div>
        <div id="area">
                <form name = "post" id = "post" method = "POST"  action = "NewPostDB.php">
                <input type = "textarea" name = "PostTitle" value = "Como Desenhar" id = "title"  col = "15" rows = "1"/><br>
                <textarea name = "post" value =  "Para desenhas basta saber pensar em uma forma e passa-la ao papel."  id = "body" col = "15" rows = "20" size = "81" maxlength = "1724"/>"Para desenhar e necessario ter uma mao e um cerebro."</textarea><br>
                
                <input type = "textarea" name = "Subject" value = "Exemples" id="Subject"  col = "25" rows = "1"/><br>
                <button type = "submit" class = "efeito efeito-1" name= "sent" id = "sent">Enviar</button>
        </form>
        
        </div>
        
</body>
</html>