<?php

require_once("config.php");

/* Testar classe Sql

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ");

echo json_encode($usuarios);
*/

$root = new Usuario();

$root->loadById(6);

echo $root;

?>