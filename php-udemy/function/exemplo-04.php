<?php
$pessoa = array(
    'nome' => 'João',
    'idade' => 36,
    'nacionalidade' => 'brasileiro'
);

print_r($pessoa);
echo "<br>";

foreach ($pessoa as &$value) {
    if (gettype($value) === 'integer') $value +=10;
    echo $value. "<br>";
};

print_r($pessoa);

?>
