<?php

function ola() {

    return "Olá Mundo! <br>";

}

function salario() {
    return 946.00;
}

echo ola();

echo "<br>";

echo ola();

$frase = ola();

echo "A frase da função tem " .strlen($frase) . " caracteres.";

echo "<br><br>";

echo "José recebeu 3 salários: " . (salario()*3);

?>