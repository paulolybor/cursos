<?php

//Entrada: Victor Luiz dos Santos
//Saída: Victor L. d. Santos

$nome = 'Victor Luis dos Santos Rudnick';
$nomes = explode(' ', $nome);

$saida = $nomes[0];
for ($i=1; $i < count($nomes); $i++) { 
	if ((count($nomes)-1) == $i) {
		$saida.=' '.$nomes[$i];
	} else {
	$saida.=' '.$nomes[$i][0].'.'; 
	}
}

echo $saida;

//echo "<pre>";
//var_dump($nomes);