<?php
$servername = "localhost";
$username = "Marcos";
$password = "0800";
$dbname = "DrawingLand";
var_dump($_POST);
$Nickname = $_POST['Nickname'];
$UserKey = $_POST['UserKey'];
$sent = $_POST['sent'];
//
if($sent == "Cadastrar"){
        ob_start();
        // Create connection
        $conn = mysql_connect($servername, $username, $password) or die("Conexão Interrompida");
        // Check connection 
                mysql_select_db($dbname) or die ("Erro ao selecionar o banco");
                $query = "INSERT INTO User(Nickname,UserKey) VALUES ('$Nickname','$UserKey');";
                $query = mysql_query($query)or die("Erro ao inserir no banco");
                header("Location:Login.php");
                mysql_close($conn);
        
}
?>