<?php
class Requests{
    private $dadosCliente;
    
    public function buscaDados($cpf,$connection){
        $stmt = $connection-> prepare("SELECT * FROM clientes where cpf_cliente = :cpf");
        $stmt-> bindValue("cpf",$cpf);
        $stmt-> execute();
        $resultado = $stmt-> fetch(PDO::FETCH_ASSOC);
        $this->dadosCliente = $resultado;
        return true;
    }
    public function __toString(){
        return json_encode(array(
            'nome'=> $this->dadosCliente['nome_cliente'],
            'cpf'=> $this->dadosCliente['cpf_cliente']
        ));
    }
     

    
}

?>