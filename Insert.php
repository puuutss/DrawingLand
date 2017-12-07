<?php
include_once("Connection.php")
$Nickname = $_POST['Nickname'];
$UserKey = $_POST['UserKey'];
$sqlinsert = "INSERT INTO User (Nickname,UserKey) VALUES ("'Nickname','UserKey'")";
$insercao = mysql_connect($sqlinsert) or die ("Nao foi possivel inserir os dados");
echo "dados devidamente inseridos"
?>