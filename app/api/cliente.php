<?php
include_once('../../config/config.php');
$retorno = new Requests();
if($retorno-> buscaDados($_GET['cpf'],$connection)){
    echo $retorno;
}
else 
{
    echo "Nao existe esse cliente em nossa base de dados!";
}



?>