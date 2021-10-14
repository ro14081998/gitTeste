<?php
#configuracoes do site



#conexao ao banco de dados
$data_connection = 'teste.com.br';
$user ='teste';
$password='teste';
$connection = new PDO($data_connection,$user,$password);

#autoload de classes
spl_autoload_register(
    function($className){
   
      include_once("../../app/controller/Class/".$className.".php");
    
}   
);
 

?>