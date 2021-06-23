<?php
//Informa que será criada uma sessão
session_start();

//Seta um valor
$_SESSION['nome'] = "Victor Luiz dos Santos";

//Imprime o valor
echo $_SESSION['nome'];

//limpa sessão
//session_destroy();