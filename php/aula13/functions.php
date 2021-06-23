<?php 
/**
 * @see Responsável por validar um e-mail
 * @param [String] $texto_entrada
 * @return [String] $texto_saida
 * @author Santos L. Victor
*/
function isemail($texto_entrada) {

	$isValid = FALSE;

	return $isValid;

}

echo isEmail('victor@luis.com');
echo '<br>';
echo isEmail('a@a.com');
echo '<br>';
echo isEmail('victor@luis');
echo '<br>';
echo isEmail('victor.santos@luis');
echo '<br>';
echo isEmail('victor@ba.com');