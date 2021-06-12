<?php 

/**
 * @see Calcula uma fatia de procentagem em fração
 * @author Nascimento Paulo Kennedy
 * */

//Função Divisão

function fdivision($valor, $juros, $parcelas, $tipo) {
	$resultados = array();

	if ($tipo == 'composto') { 
		$juros = $juros*$parcelas;
	}
	
	for ($i=0; $i < $parcelas; $i++) { 
			
			$valor_juros = ($valor*$juros)/100;
			$valor_parcela = ($valor+$valor_juros)/$parcelas;

			$resultados[] = array(
						'valor' => $valor,
						'juros' => $juros,
						'valor_juros' => $valor_juros,
						'valor_parcela' => $valor_parcela,
						'valor_juros_parcela' => $valor_juros/$parcelas,
						'parcela' => $i+1,
						'valor_final' => $valor+$valor_juros
			);
		} 
		    echo "<pre>";
			var_dump($resultados);
}

$valor = 18000;
$juros = 2.8;
$parcelas = 8;
$tipo = 'composto';
fdivision($valor, $juros, $parcelas, $tipo);