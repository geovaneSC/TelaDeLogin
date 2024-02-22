<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "senhas";

$mysqli = new mysqli($host, $user, $pass, $db);
if($mysqli->connect_errno){
    echo "Falha ao se conectar (" .($mysqli->connect_errno). ")" .$mysqli->connect_errno;
}else{
  
}
?>