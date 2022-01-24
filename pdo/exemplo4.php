<?php

$conn = new PDO("mysql:host= db ; dbname=dbphp7", "root", "root");

$stmt = $conn -> prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario= :ID");

$login = "joão";
$password = "qwerty";

$stmt -> bindParam(":LOGIN" , $login);
$stmt -> bindparam(":PASSWORD", $password);
$stmt -> bindparam(":ID", $id);

$stmt -> execute();

echo " Alterado com sucesso ";