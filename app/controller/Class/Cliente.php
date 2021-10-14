<?php
#namespace cadCliente;
class Cliente {
    private $nome;
    private $cpf;


    public function getNome(){
      return $this->nome;
    }
    public function getCpf(){
       return $this-> cpf;
    }
    public function setNome($nomeCadastrado){
       $this->nome = $nomeCadastrado;
       echo "<br/>Nome inserido: ".$this->nome;
      
    }
    public function __toString(){

        return json_encode(array(
            'nome'=> $this->getNome(),
        ));
    }
    

}


?>