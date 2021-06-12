<?php 

/**
 * @see Calcula uma fatia de procentagem em fração
 * @author Nascimento Paulo Kennedy
 * */


//Função para porcentagem
function fporcentagem($data) {
	
	$resultado = array();

	if (isset($data['valor_base']) && isset($data['minimo']) && isset($data['maximo']) && isset($data['fracao'])) {

			$valor = $data['valor_base'];
			$minimo = $data['minimo'];
			$maximo = $data['maximo'];
			$fracao = $data['fracao'];

		for ($i=$minimo; $i <= $maximo; $i = $i+$fracao) { 
			$resultado[] = array(
								'Base' => $valor,
								'Porcentagem' => $i,
								'Desconto' => $valor*($i/100),
								'Valor' => $valor - ($valor*($i/100))
			);
		}
	}

	require_once(BASE_DIR.'app/views/calculations/'.$data['p'].'.php');
}

//Função Divisão

function fdivisao($data) {
	$resultados = array();

		if (isset($data['tipo']) && isset($data['parcelas']) && isset($data['juros'])) {

	if ($data['tipo'] == 'composto') { 
		//float é para definir como número fracionario e int é número inteiro
		$juros = (float)$data['juros']*(int)$data['parcelas'];
	} else {
		$juros = (float)$data['juros'];
	}
	
	for ($i=0; $i < $data['parcelas']; $i++) { 
			
			$valor_juros = ($data['valor']*$juros)/100;
			$valor_parcela = ($data['valor']+$valor_juros)/$data['parcelas'];

			$resultados[] = array(
						'valor' => $data['valor'],
						'juros' => $juros,
						'valor_juros' => $valor_juros,
						'valor_parcela' => $valor_parcela,
						'valor_juros_parcela' => $valor_juros/$data['parcelas'],
						'parcela' => $i+1,
						'valor_final' => $data['valor']+$valor_juros
			);
		} 
	}
		$resultado = array();
		require_once(BASE_DIR.'app/views/calculations/'.$data['p'].'.php');
}

//verifica se foi clicado no menu
if (isset($_GET['p'])) {
	switch ($_GET['p']) {
		case 'percentage':
			fporcentagem($_GET);
			break;
		case 'sum':
			fsoma($_GET);
			break;
		case 'division':
			fdivisao($_GET);
			break;
		case 'subtraction':
			die(__FILE__.__LINE__);
			break;
		
	}	
} else {
	$resultado = array();
	require_once(BASE_DIR."app/views/calculations/percentage.php");	
}