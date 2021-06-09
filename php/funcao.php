<?php 

$e = $_GET['i'];
$f = 12;

function subt($a, $b) {

	$stotal = $a - $b;
	return $stotal;
}

function soma($g,$h, $n) {

	$result = $g + $h + $n;
	echo "<strong>".$result."</strong>";
}


$subt = subt($e,$f);
echo $subt;
echo "<br/><br/>";

echo $e.'<br/>'; echo $f.'<br/>'; echo $subt.'<br/>';
soma($e, $f, $subt);

 ?>