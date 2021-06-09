<?php

$numero = $_GET['n'];

for ($i=0; $i <= 10 ; $i++) { 
	//echo $numero.'x'.$i.' = '.'<b>'.$numero * $i.'</b><br/><br/>';
	echo "$numero x $i = <b>".$numero*$i."</b><br/>";
	echo "print \"<br/>";
	echo 'print \'<br/>';
}
echo '<br/><button class="btn" onClick="alert(\'P K N\')">Clique</button>';