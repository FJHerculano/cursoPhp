<?php

<?php

$conn = new PDO("mysql:host= db ; dbname=dbphp7", "root", "root");

$stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2; 

$stmt -> execute(array($id));

//$conn -> rollback();
$conn -> commit();
echo " Delete ok";