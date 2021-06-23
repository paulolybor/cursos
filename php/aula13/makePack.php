<?php
/**
 * @see Divide uma mensagerm em 2 sem cortar palavra
 * @param [Array] $msg_entrada
 * @author Nascimento, Paulo Kennedy
 * */
function explodeinPack($texto=null, $maxLenPack=90) {

	$texto = mb_convert_encoding($texto, "UTF-8");

	$retorno = array();
	
	$currentPack = '';

	for ($i=0; $i < strlen($texto); $i++) { 

		if (strlen($currentPack) == $maxLenPack) {
			//verifico se a proxima posicao e diferente espaco
			if ($texto[$i+1] !=' ') {
				$arr = explode(' ', $currentPack);
				$meia_palavra = $arr[count($arr)-1];
				unset($arr[count($arr)-1]);
				$currentPack = implode(' ', $arr);
				$retorno[] = $currentPack;
				$currentPack = $meia_palavra;
			} else {
				$retorno[] = $currentPack;
				$currentPack = '';
			}
		} else if (strlen($currentPack) > $maxLenPack) {
			$retorno[] = substr($currentPack, 0, $maxLenPack-3).'...';
			$currentPack = substr($currentPack, $maxLenPack-3, strlen($currentPack));
		}
		$currentPack.=$texto[$i];
	}
	if (!empty($currentPack)) {
		$retorno[] = $currentPack;
	}
	return $retorno;
}


$texto = "Nunca houve uma mortalidade tão alta no Brasil e parece que as pessoas estão brincando com essa realidade, disse Covas, que desde 2017 está à frente do instituto que se tornou referência na América Latina e atualmente é responsável pelo produção local da CoronaVac, a vacina desenvolvida pelo laboratório chinês Sinovac. O médico e pesquisador lembrou que, ao contrário de outros países, a taxa de transmissão no Brasil continua em níveis elevados e alertou que não é hora de baixar a guarda, apesar de Bolsonaro ter proposto recentemente o fim da obrigatoriedade do uso de máscaras para aqueles que já foram vacinados ou infectados com o vírus.";

$pacotes = explodeinPack($texto);

echo '<pre>';
var_dump($pacotes);
