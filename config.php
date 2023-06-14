<?php
$host = "localhost";
$username = "fabio";
$password = "123";
$bd = "pwii2";
try{
$conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; charset=utf8", $username, $password);
$conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){echo "falha ao conectar: ". $e->getMessage();
}
?>