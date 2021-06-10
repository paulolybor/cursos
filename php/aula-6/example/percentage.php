<?php 
$valor = 10000.00;
$minimo = 5;
$maximo = 30;
$fracao = 1;
$resultado = array();

for ($i=$minimo; $i <= $maximo; $i = $i+$fracao) { 
	$resultado[] = array(
						'Base' => $valor,
						'Porcentagem' => $i,
						'Desconto' => $valor*($i/100),
						'Valor' => $valor - ($valor*($i/100))
	);

}

phpinfo();
echo '<pre>';
var_dump($resultado);	
