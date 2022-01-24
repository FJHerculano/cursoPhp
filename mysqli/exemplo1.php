<?php

$conn = new mysqli("db", "root", "root", "dbphp7");

if($conn -> connect_error){

    echo "Error: " .$conn -> connect_error;

} 

/*
$stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$stmt -> bind_param("ss", $login , $password);

$login = "user";
$password = "12345";

$stmt -> execute();

$login = "root";
$password = "!@#$";

$stmt -> execute();
*/

$result = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row * $result -> fetch_assoc()){

    var_dump($data, $row);

}

echo json_encode($data);