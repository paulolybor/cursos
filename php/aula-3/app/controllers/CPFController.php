<?php 
//Carregando funções globais
require_once(BASE_DIR.'/app/core/Controller.php');

function rangeCPF($cpf) {

	$data = array(
		'msg' => 'CPF não informado',
		'cpf' => $cpf,
		'type' => 'danger'
	);

	if (!empty($cpf)) {
		if(strlen($cpf) < 11) {
			$data = array(
				'msg' => 'CPF faltando dígitos',
				'cpf' => $cpf,
				'type' => 'warning'
			);
		} else {
			if(strlen($cpf) > 11) {
				$data = array(
					'msg' => 'CPF com dígitos a mais',
					'cpf' => 'rangeCPF',
					'type' => 'warning'
				);
			} else {

				$possibilidades = array();

				$digitos = explode('*', $cpf);
				$totalDigitos = strlen($digitos[0])+strlen($digitos[2]);
				$faltam = 11 - $totalDigitos;

				for ($i=0; $i < 10; $i++) { 
					for ($y=0; $y < 10; $y++) { 
						$possibilidades[] = $digitos[0].$i.$y.$digitos[2];
					}
				}

				$data = array(
					'msg' => 'CPF válido para busca!',
					'cpf' => $cpf,
					'possibilidades' => $possibilidades,
					'type' => 'info'
				);

			}
		}
	}
	return $data;

}

// Verifico se existe requisição de função

if (isset($_GET['op'])) {
	$data = rangeCPF($_GET['cpf']);
}

require_once(BASE_DIR.'/app/views/index.php')
 ?>