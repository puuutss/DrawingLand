<?php
$servername = "localhost";
$username = "Marcos";
$password = "0800";
$dbname = "DrawingLand";

//
        $conn = mysql_connect($servername, $username, $password) or die("Conexão Interrompida");
        mysql_select_db($dbname) or die ("Erro ao selecionar o banco");       
?>