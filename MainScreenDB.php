<?php
include 'Conection.php';
        $query = sprintf("SELECT PostTitle,PostBody,PostSubject FROM Post ORDER BY PostID DESC LIMIT 1");
        $query2 = sprintf("SELECT Nickname FROM User INNER JOIN Post ON User.UserID = Post.PostCreatorID ORDER BY PostID DESC LIMIT 1;");
        $query = mysql_query($query)or die("Não existem entradas no banco");
        $query2 = mysql_query($query2) or die ("Nao existem entradas no banco sobre o usuario criador");
        $linha = mysql_fetch_array($query);
        $linha2 = mysql_fetch_array($query2);
        $PostBody = $linha['PostBody'];
        $PostTitle = $linha['PostTitle'];
        $PostCreator = $linha1['Nickname'];
        $PostSubject = $linha['PostSubject'];
        mysql_close($conn);
?>