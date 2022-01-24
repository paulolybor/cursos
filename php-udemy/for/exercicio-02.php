<?php

$cores = array("azul", "branco", "vermelho");

foreach ($cores as $value) {
    echo "$value <br>";
}

echo "<hr>";

$coresplus = array("azul", "branco", "vermelho");

foreach ($coresplus as $key => $value) {
    echo "$key - $value <br>";
}

echo "---<br>";
echo $coresplus[1]."<br><br>";
?>