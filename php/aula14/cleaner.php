<?php
/**
 * @see responsável por remover os duplicados e validar %
 * */


function toClean($fontes_entrada=array()) {

		$data=array(
				'type' => 'danger',
				'msg' => 'Nenhuma fonte de entrada fornecida!'
				);

		if (!empty($fontes_entrada)) {
			$font_saida = array();

			foreach ($fontes_entrada as $k => $font) {
				$total=0;
				foreach ($font as $key => $val) {
					
					$excluir = array(' ','.','_','(',')','{','}');
					$valor_limpo = str_replace($excluir, '', $val);
						
					if(empty($font_saida[$key]) || !in_array($valor_limpo, (array)$font_saida[$key])) {
						$font_saida[$key][] = $valor_limpo;
					}
				}
			}

			foreach ($font_saida as $key => $value) {
					foreach ($value as $k => $val) {
						$repeticao=0;
						$total=0;
						foreach ($fontes_entrada as $kiy => $font) {
							foreach ($font as $kay => $v) {
								$excluir = array(' ','.','_','(',')','{','}');
								$valor_limpo = str_replace($excluir, '', $v);
								if ($valor_limpo == $font_saida[$key][$k]) {
									$repeticao++;
								}
								if ($kay==$key) {
									$total++;
								}
							}
						}
						$porcent = (100*$repeticao)/$total;
						$font_saida[$key][$k] = $font_saida[$key][$k]." - $porcent%[$repeticao]";
					}
			}

			$data=array(
				'type' => 'success',
				'entrada' => $fontes_entrada,
				'cleaned' => $font_saida,
				'msg' => 'Lista processada com Sucesso!'
				);
		}
			return $data;
}

$fonts = array(
			0 => array(
					'nome' => 'Victor Luis dos Santos',
					'cpf' => '333.149.078-42',
					'telefone' => '(41) 3335-2162'
				),
			1 => array(
					'cpf' => '33314907842',
					'telefone' => '(41) 3335-2162',
					'celular' => '(41) 99969-4381'
				),
			2 => array(
					'nome' => 'Victor Luis dos Santos',
					'cpf' => '333.149.056-40',
					'telefone' => '4133352162',
					'celular' => '4199969-4381'
				),
			3 => array(
					'telefone' => '4133300162'
				)
			);

$resposta = toClean($fonts);
echo '<pre>';
var_dump($resposta);