<?php
$Nickname = (isset($_POST['Nickname'])) ? $_POST['Nickname'] : '';
$UserKey = (isset($_POST['UserKey'])) ? $_POST['UserKey'] : '';
 
if (!empty($Nickname) && !empty($UserKey)){
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
        $confirmation = mysql_query("SELECT * FROM 'User' WHERE Nickname = '$Nickname AND UserKey = '$UserKey';");
        if(!$confirmation){
                die("DEU MERDA");
        }else{
                $cont = mysql_num_rows($confirmation);
                if($cont == 1){
                        setcookie("login",$Nickname);
                        setcookie("senha",$UserKey);
                        echo "<script>alert('Usuário Logado');</script>";
                }else{
                        echo "<script>alert('Login ou senha errados.');</script><?php header('Location: Login.html'); ?>";
                
                }
        }   
}
        
        
        $conn->close();
?>