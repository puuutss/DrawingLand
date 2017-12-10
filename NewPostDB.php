<?php
$servername = "localhost";
$username = "Marcos";
$password = "0800";
$dbname = "DrawingLand";
var_dump($_POST);
$PostTitle = $_POST['PostTitle'];
$PostBody = $_POST['post'];
$CookieCreator = $_COOKIE['UserID'];
$PostSubject = $_POST['Subject'];
$sent = $_POST['sent'];
//
        if(isset($_COOKIE['Nickname'])){
        ob_start();
        // Create connection
        $conn = mysql_connect($servername, $username, $password) or die("Conexão Interrompida");
        // Check connection 
                mysql_select_db($dbname) or die ("Erro ao selecionar o banco");
                $query = "INSERT INTO Post (PostTitle, PostCreatorID, PostID, PostSubject, PostBody) VALUES ('$PostTitle', '$CookieCreator', NULL, '$PostSubject', '$PostBody')";
                $query = mysql_query($query)or die("Erro ao inserir no banco");
                header("Location:MainScreen.php");
                mysql_close($conn);
        }else{
                echo "<script>alert('Nenhum Usuário logado, faça login para continuar')</script>";
}
?>