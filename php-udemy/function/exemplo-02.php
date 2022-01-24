<?php

$a = 10;

function trocaValor ($b) {

    $b += 50;

    return $b;

};

echo trocaValor($a);

echo "<br>";

echo $a;

echo "<br>";
echo "=================================";
echo "<br>";


//& => passagem de parâmetros por referência

$x = 20;

function trocaValorx (&$y) {

    $y += 50;

    return $y;

};

echo $x;
echo "<br>";
echo trocaValorx($x);

echo "<br>";

echo trocaValorx($x);

echo "<br>";

echo trocaValorx($x);
echo "<br>";

echo $x;

?>