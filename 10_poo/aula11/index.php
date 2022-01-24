<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad -> setNome("Francisco Herculano");
$cad -> setEmail("Francisco@email.com.br");
$cad -> setNome("123456");

echo $cad;

