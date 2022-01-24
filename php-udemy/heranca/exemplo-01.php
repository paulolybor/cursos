<?php

class Documentos {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }
}


class CPF extends Documentos {

    public function validar():bool {

        $numeroCPF = $this->getNumero();
        //Validação do CPF
        return true;
    }
}

$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

?>