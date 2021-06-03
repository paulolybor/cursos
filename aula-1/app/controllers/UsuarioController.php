<?php 

$nome = $_POST['nome'];
$email = 'teste@teste.com';
$senha = '123456';
$_view = 'login';

if (isset($_POST)) {
    if($_POST['email']==$email
    &&
    $_POST['senha']==$senha
    ) {
        $_view = 'home';
    }
} 
require(__DIR__.'/../views/'.$_view.'.php');

 ?>