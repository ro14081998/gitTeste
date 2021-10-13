<?php
#configuracoes do site


#conexao ao banco de dados
$data_connection = 'mysql:dbname=testeAPI;host=127.0.0.1';
$user ='root';
$password='';
$connection = new PDO($data_connection,$user,$password);

#autoload de classes

function __autoload($className){
    $file_name = "../app/controller/classes/".$className.".php";
    var_dump($file_name);
    include_once($file_name);
}

$nova = new Cliente();
?>