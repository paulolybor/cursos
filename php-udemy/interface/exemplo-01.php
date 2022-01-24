<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Cerato implements Veiculo {

    public function acelerar($velocidade){
        echo "O Veículo acelerou até " . $velocidade . " Km/h";
    }

    public function frenar($velocidade){
        echo "O Veículo freiou em " . $velocidade . " metros";
    }

    public function trocarMarcha($marcha){
        echo "O Veículo engasgou a marcha  " . $marcha;
    }
}

$carro = new Cerato;
$carro ->trocarMarcha(1);
echo "<br/>";
$carro -> frenar("100");
echo "<br/>";
$carro -> acelerar("230");

?>