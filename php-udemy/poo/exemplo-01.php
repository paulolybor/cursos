<?php

class Pesssoa {  //classe sempre com a 1ª maiuscula

    public $nome; //atributo

    public function falar(){ //método
        return "O meu nome é " . $this->nome; //Quando chamamos um atributo dentro de 1 método, deve ser assim.

    }

}

$glaucio = new Pessoa();
$glaucio -> nome = "Glaucio Daniel";
echo $glaucio->falar();

?>