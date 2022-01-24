<?php
// Retornando a sessão criada:

require_once("config.php");

echo "Os dados recebidos foram: <br><br>";

echo "Nome: " . $_SESSION['nome'] . "<br>";

echo "Sobrenome: " . $_SESSION['sobrenome'];

?>