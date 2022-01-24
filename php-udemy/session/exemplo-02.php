<?php
session_start();

//session_unset($_SESSION['nome']); /para limpar sessão 'nome';
//session_destroy; apaga tudo, inclusive as informações de usuário no site

echo $_SESSION['nome'];

?>