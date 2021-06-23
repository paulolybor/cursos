<?php
session_start();

if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
	// carrega a tela padrão de quem já está logado
	$_GET['funcao'] = 'editar';
}

//carrega a tela de login
require_once('controllers/usuarioController.php');