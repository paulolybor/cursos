<?php

$nome_completo = "Victor Luiz dos Santos";
$juncao = array('dos','das','do','da','e');


$nomes = explode(' ', $nome_completo);

foreach ($nomes as $key => $nome) {
	if (in_array($nome, $juncao)) {
		die('Encontrou!');
	}
}

