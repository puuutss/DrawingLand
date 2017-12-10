<?php
$Nickname = $_POST['Nickname'];
$UserKey = $_POST['UserKey'];
$sent = $_POST['sent'];
var_dump($_POST);
if($sent){
        if (($Nickname==null)&&($UserKey==null)){
                echo "<script>alert('Todos os campos devem estar preenchidos')</script>";
        }else{
               
                $servername = "localhost";
                $username = "Marcos";
                $password = "0800";
                $dbname = "DrawingLand";

                // Create connection
                $conn = mysql_connect($servername, $username, $password) or die ("Falha na conexao com o banco");
                // Check connection
                mysql_select_db($dbname) or die("Erro ao selecionar o banco");
                $query = "SELECT * FROM User WHERE Nickname = '$Nickname' AND UserKey = '$UserKey'";
                $query = mysql_query($query) or die("Erro no SQL");
                if($query){
                        session_start();
                        $line = mysql_fetch_array($query);
                        $search = mysql_num_rows($query)or die("Nenhum valor encontrado");
                        $userid = $line['UserID'];
                        $userpass = $line['UserKey'];
                        $username = $line['Nickname'];
                        if(($search>0)&&($line>0)){
                                setcookie("UserID",$userid,time()+(3*24*3600),"/");
                                        setcookie("Nickname",$username,time()+(3*24*3600),"/");
                                        setcookie("UserKey",$userpass,time()+3*24*3600,"/");
                                        $user = $_SESSION[$Nickname];
                                        $userid1 = $_SESSION[$userid]; 
                                        echo "<script>alert('Usuário Logado');</script>";
                                        header('Location: MainScreen.php');
                        } 
                        else{
                                 echo "<script>alert('Erro ao Logar o Cookie');</script>";   
                        }
                        
                }else{
                        echo "<script>alert('Login ou senha errados.');</script>";
                         mysql_close($conn);
                         header('Location: Login.php');
                }
          
        }
        
        
 
}
      
?>