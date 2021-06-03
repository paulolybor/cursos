<?php 
/*
$x = "5bar";
$y = true;

settype($x, "integer");
settype($y, "string");

echo $x;
echo '<br/>';
echo $y;
*/
if (!(empty($_GET['$i']))) {
	$curso = $_GET['$i'];


	if ($curso == "PHP" || $curso == "php") {
		echo "Você está no Curso de PHP";
	} elseif($curso == "JS" || $curso == "js") {
		echo "Você está no Curso de JavaScript";
	} elseif($curso == "HTML" || $curso == "html") {
		echo "Você está no Curso de HTML";
	} elseif($curso == "CSS" || $curso == "css") {
		echo "Você está no Curso de CSS";
	} else {
		echo "Não temos Esse Curso";
	}
} else {
	echo "Digite um Curso";
}


 ?>