<?php

require_once("config.php");

//$sql = new Sql(); 
//$usuarios = $sql -> select("SELECT * FROM tb_usuarios");

/*
 //Carrega uma lista de usuarios

echo json_encode($usuarios);  
$root = new Usuario();
$root -> loadById(3);
echo $root;
*/

//Carrega uma lista de usuarios
/*
$lista = Usuraio::getList();
echo json_encode($lista);
*/


// Carrega uma lista de usuarios por o login
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

// carrega um usuario usando o login e senha
/*
$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;
*/


// Criando um novo usuario
/*
$aluno = new Usuario();

// Apos o construct ser adicionado na classe usuario
$aluno = new Usuario("aluno", "@lun0");

/*
$aluno-> setDeslogin("aluno");
$aluno-> setDessenha("@lun0");
/


$aluno-> insert();

echo $aluno;

// 

// Alterar dados de um usuario 
$usuario = new Usuario();

$usuario-> loadById(8)

$usuario->update( "professor", "!@#$%&@@" );

echo $usuario;
*/

$usuario = new Usuario();
$usuario = loadById(7);
$usuario -> delete();

echo $usuario;