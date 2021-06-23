<?php
/**
 * @see responsável por retornar somente os pares ou os impares
 * @param [Array] $lista_entrada
 * @param [String] $type ENUM('par', 'impar')
 * @author Nascimento, Paulo Kennedy
 * */
function separador_list($lista_entrada=array(), $type = 'par') {

	$lista_saida = array();
    $types = array('par', 'impar');

    if (in_array($type, $types)) {
        
        for ($i=0; $i < count($lista_entrada); $i++) { 
            $result = $lista_entrada[$i]%2;
            if ($type == 'par' && $result == 0
                ||
                $type == 'impar' && $result != 0) {
                    $lista_saida[] = $lista_entrada[$i];
               
            }
        }


    } else {
        die('Tipo informado não suportado');
    }
	return $lista_saida;
}

$lista = array(3,6,5,1,90,432,65,32,543,4,0);

$response = separador_list($lista, 'par');
echo '<pre>';
echo '==== Pares ====';
print_r($response);

echo '<br/>';
$response = separador_list($lista,'impar');
echo '<pre>';
echo '==== Impares ====';
print_r($response);