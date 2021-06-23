<?php 
/**
 * @see Responsável por sortear conjunto de números únicos, dado mínimo e máximo
 * */

 function sorteiaNumeros($qtd_numeros=6, $num_min=1, $num_max=60) {

 	$numeros_sorteados = array();

 	while(count($numeros_sorteados) < $qtd_numeros) {
 
  		$numero = rand($num_min, $num_max);
 
 		if (!in_array($numero, $numeros_sorteados)) {
 			$numeros_sorteados[] = $numero;
 		}
 	}
 	return $numeros_sorteados;
 }
