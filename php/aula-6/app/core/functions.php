<?php
/**
 * @see Responsável por formatar um valor em real
*/
function formatMoney($valor_entrada) {

	$valor_entrada = (string)$valor_entrada;
	$retorno = array('valor_entrada' => $valor_entrada);

	$qtd_separador = 0;
	$separadores = array('.',',');

	foreach ($separadores as $key => $value) {
		$arr = explode($value, $valor_entrada);
		if(count($arr)>1) { // tem o separador
			$qtd_separador++;
		}
	}

	if($qtd_separador==0) {
		$numero_formatado=null;
		$numero_base=null;
		for ($i=strlen($valor_entrada)-1; $i >=0 ; $i--) {
			$numero_base=$valor_entrada[$i].$numero_base;
			$numero_formatado=$valor_entrada[$i].$numero_formatado;
			if(strlen($numero_base)>2 && (strlen($numero_base)%3)==0) {
				$numero_formatado='.'.$numero_formatado;
			}
		}
		$retorno['valor'] = $numero_formatado.',00';
	} else if ($qtd_separador != count($separadores)) {
		for ($i=strlen($valor_entrada)-1; $i >=0 ; $i--) { 
			$valor_entrada = str_replace('.', ',', $valor_entrada);
			$arr = explode(',', $valor_entrada);
			if(strlen($arr[1])<=2) {
				for ($i=strlen($arr[0])-1; $i >=0 ; $i--) {
					$numero_base=$arr[0][$i].$numero_base;
					$numero_formatado=$arr[0][$i].$numero_formatado;
					if(strlen($numero_base)>2 && (strlen($numero_base)%3)==0) {
						$numero_formatado='.'.$numero_formatado;
					}
				}
				$retorno['valor'] = $numero_formatado.','.$arr[1];
			} else {
				return formatMoney($arr[0].$arr[1]);
			}
		}
	} else {
		$retorno['valor'] = $valor_entrada;
	}
	return $retorno;
}