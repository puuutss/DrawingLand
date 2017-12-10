<?php
setcookie('Nickname',"DrawingLand",time()+100*100*100);
setcookie('UserID',"0",time()+100*100*100);
setcookie('UserKey',"DrawingLand",time()+100*100*100);
echo "<script>alert('Deslogado com sucesso... Redirecionando para a tela inicial')</script>";
echo "<script>window.close();</script>";
?>