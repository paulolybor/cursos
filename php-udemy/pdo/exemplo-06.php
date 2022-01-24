<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction(); // Abre a transação

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt -> execute(array($id));

//$conn->rollback();  // Fecha a transação confirmando ou não
$conn->commit();

echo "Dados Excluídos com Sucesso!!!"

?>