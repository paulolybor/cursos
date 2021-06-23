<?php

 function preencher($texto = null, $campos = array() ) {

 		$data = array (
 					'type' => 'danger',
 					'msg' => 'Favor Digitar um Texto!'
 		);

 		if (!is_null($texto)) {
 			$data = array (
 					'type' => 'warning',
 					'msg' => 'Nenhum campo informado!'
 		);
 			if (!empty($campos)) {
 					$texto_saida = $texto;

 					foreach ($campos as $key => $campo) {
 					$texto_saida = str_replace('{'.strtoupper($key).'}', $campo, $texto_saida);
 					}

 					$data = array (
		 							'type' => 'success',
		 							'texto' => $texto,
		 							'response' => $texto_saida,
		 							'msg' => 'Texto preenchido com Sucesso!'
 								);
 			}
 		}
 		return $data;
 }


 $procuracao = "Eu {NOME}, portador do CPF {CPF}, nascido em: {NASCIMENTO}, declaro estar ciente das boas práticas de programação, utilizando a linguagem {PROGRAMACAO}";

 $campos = array (
 				'nome' => 'Paulo Kennedy',
 				'cpf' => '802.180.599-49',
 				'nascimento' => '23/06/1972',
 				'programacao' => 'PHP - Personal Home Page'
 			);

$texto = preencher($procuracao, $campos);

echo "<pre>";
var_dump($texto);
