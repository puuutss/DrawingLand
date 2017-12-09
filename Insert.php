<?php
$servername = "localhost";
$username = "DrawingLand";
$password = "0800niemeyer";
$dbname = "DrawingLand";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['Nickname'])&&$_POST['UserKey']==true){
        $Nickname = $_POST['Nickname'];
        $UserKey = $_POST['UserKey'];
}else{
        $Nickname = $UserKey = false;
}
class User{
        private $Nickname;
        private $UserKey;
}
function setProduto(){
       //realiza o insert no banco de dados passando os valores do objeto criado
       $insertProdutos = mysql_query("INSERT INTO 'User' (Nickname, UserKey)
        VALUES ('$this->$Nickname','this->$UserKey)'");

       if($insertProdutos){
           $resposta="Inserido com sucesso";
           echo "<script>alert('Usuário cadastrado!')</script>"
       }else{
           $resposta ="Erro ao inserir";
           echo "<script>alert('Erro ao cadastrar usuario')</script>"
       }
      
       return $resposta;
   }
$conn->close();
?>