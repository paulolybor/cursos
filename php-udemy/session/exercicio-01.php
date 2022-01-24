<?php

require_once("config.php");
echo "Esta é a página 01, onde a sessão será iniciada.";

$_SESSION ["aula"] = "PHP";

$_SESSION ['hora'] = time();

echo '<br /><a href="exercicio-02.php"> Clique para ir à página 02</a>';

?>