<?php

class Pessoa {

    public $idade = 20;
    public $nome;

    public function __construct(){
        echo "teste\n";
        echo "<pre>";
        var_dump($this);
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

}

$pessoa = new Pessoa();
$pessoa ->setIdade("10");
$pessoa ->setNome("Paulo");

echo "re-teste\n";
echo "<pre>";
var_dump($pessoa);

?>