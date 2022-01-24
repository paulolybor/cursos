<?php

function soma(int ...$valores):string {

    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";

echo soma(2, 2, 4, 6);
echo "<br>";

echo soma(2.9, 2.9);
echo "<br>"; //como definimos nº inteiros na função, ela despreza após a virgula.

echo soma(2, 3, 5,7);
echo "<br>";

echo var_dump(soma(4,5));

?>