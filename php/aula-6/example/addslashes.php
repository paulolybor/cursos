<?php
$str = "Seu nome é O'reilly?";

// Mostra: Seu nome é O\'reilly?
echo addslashes($str);


function fatorial($num) {
	if (($num == 0) || ($num == 1)) {
		return 1;
	} else
	return $num * fatorial($num -1);
}
$fat = 0;
$res = fatorial($fat);
echo "O fatorial de $fat é $res <br>";

?>