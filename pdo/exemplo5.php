<?php

<?php

$conn = new PDO("mysql:host= db ; dbname=dbphp7", "root", "root");

$stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


$stmt -> bindparam(":ID", $id);

$stmt -> execute();

echo " Delete ok";