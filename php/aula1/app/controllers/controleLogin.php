<?php 

$nome = 'Paulo';
$email = 'teste@teste.com';
$pass = '123';
$spam = 'https://';
$exibe = 'login';

if (isset($_POST) && empty($_POST['leaveblank'])
		&& $_POST['dontchange'] == $spam) {
	if ($_POST['email'] == $email 
		&& $_POST['pass'] == $pass ) {
		$exibe = 'home';
	}
	
}
require_once(__DIR__.'/../views/'.$exibe.'.php');
//require(__DIR__.'./../../index.php');
 ?>