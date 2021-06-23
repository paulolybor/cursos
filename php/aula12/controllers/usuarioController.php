<?php

function logar($formulario=array(), $response=array()) {

	if (!empty($formulario)) {
		
		if (empty($formulario['login']) && empty($formulario['senha'])) {
			$response = array(
							'type' => 'info',
							'msg' => 'Favor Preencher o Formulário'
			);
		} else {
			if (empty($formulario['login'])) {
				$response = array(
							'type' => 'danger',
							'msg' => 'Favor Preencher o Login'
						);
			} else {
				if (empty($formulario['senha'])) {
					$response = array(
								'type' => 'danger',
								'msg' => 'Favor Preencher a Senha'
							);
				} else {
					$row = 1;
					if (($handle = fopen("modules/usuarios.csv", "r")) !== FALSE) {
					    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
					        if ($row > 1) {
					        	if ($data[$p_colun_login]==$formulario['login']
					        	&& $data[$p_colun_senha]==md5($formulario['senha'])) {
					        		$usuario = $data;
					        	}
					        } else {
					        	$p_colun_login = null;
					        	$p_colun_senha = null;
					        	for ($c=0; $c < count($data); $c++) { 
					        		if ($data[$c] == 'login') {
					        			$p_colun_login = $c;
					        		} else if($data[$c] == 'senha') {
					        			$p_colun_senha = $c;
					        		}
					        	}
					        }
					        $row++;
					        }
					    }
					    fclose($handle);
					}
					if(empty($usuario)) {
						$response = array(
									'type' => 'danger',
									'msg' => 'Login ou Senha Inválidos!'
						);
					} else {
						$_SESSION['usuario'] = $usuario;
					}
				}
			}
		}
	if (!isset($_SESSION['usuario'])) {
		require_once('views/usuarios/login.php');
	} else {
		editar($_SESSION['usuario']);
	}
}

function cadastrar($formulario) {
	
    unset($formulario['funcao']); //remove uma posição do array
    if (!empty($formulario)) {
        
		$file = "modules/usuarios.csv";
		$lastId = 0;
		
		if (($handle = fopen($file, "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $lastId++;
		    }
		    fclose($handle);
		}

	    $formulario['identificador'] = $lastId;
		$line = array(
					'identificador' => $formulario['identificador'],
					'nome' => $formulario['nome'],
					'login' => $formulario['login'],
					'senha' => md5($formulario['senha'])
		);

		//echo '<pre>';
		//var_dump($formulario, $line);
		//die();

		$handle = fopen($file, "a");
		fputcsv($handle, $line);
		fclose($handle);

		$response = array(
					'type' => 'success',
					'msg' => 'Usuário Cadstrado com Sucesso!'
		);
		logar(null, $response);		
	} else {
		require_once('views/cadastrar.php');
	}
}


function editar() {
	require_once('views/usuarios/edit.php');
}

function logout() {
	session_destroy();
	$arr = explode('/', $_SERVER['REQUEST_URI']);
	header('Location: http://'.$_SERVER['SERVER_NAME'].'/'.$arr[1].'/'.$arr[2].'/'.$arr[3]);
}


if (isset($_REQUEST['funcao']) && !empty($_REQUEST['funcao'])) {
	switch ($_REQUEST['funcao']) {
		case 'editar':
			editar($_REQUEST);
			break;
		
		case 'sair':
			logout();
			break;

		case 'logar':
			logar($_REQUEST);
			break;

		case 'cadastrar':
			cadastrar($_REQUEST);
			break;
		
		default:
			logar($_REQUEST);
			break;
	}
} else {
	logar();
}
	echo '<pre>';