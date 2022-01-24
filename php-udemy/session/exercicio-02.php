<?php
// E esta é a página 2, onde recuperamos as variáveis de sessão.

require_once("config.php");

echo 'Agora estamos na página 2<br />';
echo "Estamos na aula de " . $_SESSION['aula'] . "<br />";
echo "E agora são " . date('H:i:s', $_SESSION['hora']) . " horas";

?>