<?php
include_once("Connection.php");
$Nickname = $_POST['Nickname'];
$UserKey = $_POST['UserKey'];
$Connection = mysqli_connect('localhost','root','','DrawingLand_DB');
$sqlinsert = "INSERT INTO User(Nickname,UserKey) VALUES ('$Nickname','$UserKey')";
$insercao = mysql_connect($sqlinsert) or die ("Nao foi possivel inserir os dados");
        mysqli_query($Connection,$sql) or die("DEU RUIM!!");
        mysqli_close($Connection);
        echo "dados devidamente inseridos";
?>