<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn -> beginTransaction();

$stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

$stmt -> execute(array($id));

echo "Tem certeze que deseja apagar o ID: " . $id . "? (y/n)<br/>";

$confirm = "y";

if ($confirm === "y") {
    $conn -> commit();
    echo "Dados excluidos com sucesso!";
} else {
$conn -> rollback();
echo "Você cancelou a exclusão!";
}
?>