<?php 
/**
 * @see recebe uma string e deixa somente os primeiros digitos em maiusculo
 * @param [String] $texto_entrada
 * @param [String] $texto_saida
 * @author Santos L. Victor
*/
function formatName($texto_entrada) {

	$texto_saida = '';
	$juncoes = array('dos','das','o','e','do','da','de','a');

	// 1ª deixa tudo em caixa baixa
	$texto_entrada = strtolower($texto_entrada);

	// 2ª explodir, para converter a string em array
	$nomes = explode(' ', $texto_entrada);

	// 3ª corre a lista de nomes
	foreach ($nomes as $key => $nome) {

		// 4ª verifico se o nome esta nas conjunções
		if(!in_array($nome, $juncoes)) {

			// 5ª transforma a primeira letra em maiusculo
			$pLetra = strtoupper($nome[0]);

			// 6ª define varáivel que será todo o nome, menos a primeira letra
			$lNome = '';

			// 7ª Corre o nome todo menos a posição 0(prmeira letra)
			for ($i=1; $i < strlen($nome); $i++) { 

				// 8ª concatena letra a letra para formação do nome
				$lNome .= $nome[$i];
			}

			// 9ª concatena a primeira letra com o restante do for
			$nome = $pLetra.$lNome;
		}

		// 10ª monta texto de saída com espaço entre os nomes
		$texto_saida .= $nome.' ';
	}

	// 11ª retorna o resultado($texto_saida) para quem chamou a função
	return $texto_saida;
}
echo formatName('Pedro e PaULo PeDro da silva gomes dos SanTos');
