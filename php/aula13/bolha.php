<?php
/**
 * @see Ordena um array
 * @param [Array] $lista_entrada
 * @param [String] $type, asc = crescente e dec = decrescente
 * @author Nascimento, Paulo Kennedy
 * */
function orderList($lista_entrada=array(), $type='asc') {

	$current_number = null;

	// Correndo a lista recebida
	for ($i=0; $i < count($lista_entrada); $i++) { 
		// Roda o array comparando a posição em i com a lista toda em y
		for ($y=0; $y < count($lista_entrada) ; $y++) { 
			//verifica se o numero em i é menor que em y
			if (
				($lista_entrada[$i] > $lista_entrada[$y] && $type == 'dec')
				||
				($lista_entrada[$i] < $lista_entrada[$y] && $type == 'asc')
			) { 
				//realiza a transição
				$current_number = $lista_entrada[$y];
				$lista_entrada[$y] = $lista_entrada[$i];
				$lista_entrada[$i] = $current_number;
			}
		}
	}

	return $lista_entrada;

}

$lista = array(5,3,1,9,20,2,78,37,90,200,4,120,47,93,52);

echo '<pre>';
print_r(orderList($lista, 'asc'));