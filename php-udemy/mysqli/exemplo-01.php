<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);
//bind_param dentro das primeiras aspas, define tipo de variável:
//s para string
//i para inteiro
//b para blob
//d para double

$login = "root";
$pass = "!@#$%";

$stmt->execute();

$login = "user";
$pass = "12345";

$stmt->execute();


?>