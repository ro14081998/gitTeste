<?php
#configuracoes do site
#conexao ao banco de dados
$data_connection = 'mysql:dbname=testeAPI;host=127.0.0.1';
$user ='root';
$password='';
$connection = new PDO($data_connection,$user,$password);
echo "Conexão bem sucedida!";
?>