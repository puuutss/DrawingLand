<!DOCTYPE html>
                
          <html>
          <head>
                 <title>DrawingLand</title>
                 <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Sue+Ellen+Francisco" rel="stylesheet">
                 <link rel = "stylesheet" type = "text/css" href = "MainScreen.css">
         </head>
         <body>
                 <div id="label">
                         <form name = "Redirect">
                                 <input type = "text" id = "UserLogged" value = "<?echo $_COOKIE['Nickname'] ?>" readonly = "readonly">
                                 <input type = "submit" id = "newpost" value = "Nova Postagem" onClick = window.open("NewPost.php");>
                                 <button type = "submit" id = "logout" value = "Logout" onClick = window.open("Logout.php");">Logout</button>
                         </form>
                
                 </div>
                 <div id="area">
                                <form name = "post" id = "post">
                                          <textarea name = "PostTitle" id = "title" readonly = "readonly"/><?
                                          include'Conection.php';
                                          $query = sprintf("SELECT PostTitle,PostBody,PostSubject FROM Post ORDER BY PostID DESC LIMIT 1");
                                          $queryres = mysql_query($query)or die("Não existem entradas no banco");
                                          $linha = mysql_fetch_array($queryres);
                                          $PostTitle = $linha['PostTitle'];
                                          echo $PostTitle;
                                          
                                          ?> </textarea><br>
                                          <textarea name = "post"  readonly = "readonly" id = "body"wrap = "off" col = "15" rows"40"/><?
                                          include'Conection.php';
                                          $query = sprintf("SELECT PostTitle,PostBody,PostSubject FROM Post ORDER BY PostID DESC LIMIT 1");
                                          $queryres = mysql_query($query)or die("Não existem entradas no banco");
                                          $linha = mysql_fetch_array($queryres);
                                          $PostBody = $linha['PostBody'];
                                          echo $PostBody
                                          
                                          ?></textarea><br>
                                          <textarea name = "Creator"  id = "creator" readonly = "readonly" /><?
                                          include'Conection.php';
                                          $query = sprintf("SELECT Nickname FROM User INNER JOIN Post ON User.UserID = Post.PostCreatorID ORDER BY PostID DESC LIMIT 1;");
                                          $queryres = mysql_query($query)or die("Não existem entradas no banco");
                                          $linha = mysql_fetch_array($queryres);
                                          $PostCreator = $linha['Nickname'];
                                          echo $PostCreator
                                          
                                          ?></textarea><br>
                                          <textarea name = "Subject" id="Subject" readonly = "readonly" /><?
                                          include'Conection.php';
                                          $query = sprintf("SELECT PostTitle,PostBody,PostSubject FROM Post ORDER BY PostID DESC LIMIT 1");
                                          $queryres = mysql_query($query)or die("Não existem entradas no banco");
                                          $linha = mysql_fetch_array($queryres);
                                          $PostSubject = $linha['PostSubject'];
                                          echo $PostSubject
                                          
                                          ?></textarea>
                                          
                        </form>
        
                </div>
        
        </body>
</html>