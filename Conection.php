<?php
$servidor = "127.0.0";
$usuario = "root";
$senha = "";
$banco = "DrawingLand_DB";

$conexao = mysql_connect($servidor,$usuario,$senha);
$db = mysql_select_db($banco,$conexao)or die ("Erro ao conectar ao banco");        
?>