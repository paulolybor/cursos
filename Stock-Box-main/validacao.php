<?php
session_start();
include 'conexao.php';

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao,trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao,trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao,trim(md5($_POST['senha'])));

$sql = "SELECT COUNT(*) AS TOTAL FROM dono_estoque WHERE email ='$email'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

if ($row['TOTAL']==1) {
  $_SESSION['usuario']='';
  header('Location: signup.php');
  exit;
}

$sql = "INSERT INTO dono_estoque (nome, telefone, email, senha) VALUES ('$nome','$telefone','$email','$senha')";

if ($conexao->query($sql)===TRUE) {
  $_SESSION['status_cadastro'] = TRUE;
}
header('Location: signin.php');
exit;
 ?>
