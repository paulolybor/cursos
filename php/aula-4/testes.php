<?php


//Descoberta de numero de cpf

$font = '333tRu07r78';
$caracteres = array();

for ($i=0; $i < strlen($font); $i++) { 
    if(!is_numeric($font[$i])) {
        $caracteres[] = $font[$i];
    }
}

$possibilidades[] = $font;

function montar($lista, $sub) {
    $retorno = array();
    foreach ($lista as $key => $value) {
        for ($i=0; $i < 10; $i++) { 
            $retorno[] = str_replace($sub, $i, $value);
        }
    }
    return $retorno;
}

foreach ($caracteres as $key => $value) {
    $possibilidades = montar($possibilidades, $value);
}

echo '<pre>';
var_dump($possibilidades);



 ?>
