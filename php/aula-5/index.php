<?php 

/**
 * @author Brad Christie
 * @see Limita a quantidade de substituições (https://stackoverflow.com/questions/8510223/php-str-replace-with-a-limit-param/16628390)
*/
function str_first_replace($find, $replacement, $subject, $limit = 0){
  if ($limit == 0)
    return str_replace($find, $replacement, $subject);
  $ptn = '/' . preg_quote($find,'/') . '/';
  return preg_replace($ptn, $replacement, $subject, $limit);
}

/**
 * @see Recebe uma string e retorna tudo que não for numérico
 * @param [String] $cpf_recebido
 * @return [Array] $caracteres
 * @author Nascimento Paulo Kennedy
 * */
function pegaCaracteres($cpf_recebido) {

	//definindo variavel caracteres com tipo array
	$caracteres = array();

	//percorrendo cada posicao do cpf recebido
	for ($i=0; $i < strlen($cpf_recebido) ; $i++) { 
		
		if (!is_numeric($cpf_recebido[$i])) {
			
			//colocando os caracteres no array de caracteres
			$caracteres[] = $cpf_recebido[$i];

		}

	}

	return $caracteres;
}

//chamando a funcao, enviando o cpf para receber os caracteres
$separadores = pegaCaracteres($cpf);

//echo "<pre>";
//var_dump($separadores);

/**
 * @see substitui um determinado caracter, por uma sequencia de número de 0 a 9
 * @param [String] $separados
 * @param [Array] $possibilidades, lista das possibilidades calculadas até o momento
 * @return [Array] $possibilidades
 * @author Nascimento Paulo Kennedy
 * */
function subCaracter($separador, $possibilidades) {
	//correndo as possibilidades processadas até o momento
	foreach ($possibilidades as $key => $value) {
		//corre de 0 a 9 para substituir
		for ($i=0; $i < 10; $i++) { 
			//substitui onde encontrar o separador pelo valor corrente do i
			//$possibilidades[] = str_replace($separador, $i, $value); #nesse caso ele substitui todos os caracteres iguais ao mesmo tempo e não funciona como deveria
			$possibilidades[] = str_first_replace($separador, $i, $value);
		}
	}
	return $possibilidades;
}
//definindo a variável a ser processada
$cpf = '8*2*80*9949';

//chamando a função, enviando o cpf para receber os caracters
$separadores = pegaCaracteres($cpf);
$possibilidades = array($cpf);

foreach ($separadores as $key => $separador) {
	$possibilidades = subCaracter ($separador, $possibilidades);
}

echo "<pre>";
var_dump($possibilidades);

