<?php

// tipos de dados basicos

$nome = "Herculano";
$site = "www.google.com.br";

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//tipos de dados compostos

$frutas = array("abacaxi", "laranja", "manga");

//imprimindo dados do array
//echo $frutas[2];

//conceito da orientação a objetos, importante o estudo
$nascimento = new DateTime();

//var_dump($nascimento);

// tipos especiais

$arquivo = fopen("exemplo2.php,", "r");

//var_dump($arquivo);

// nulo é diferente de vazio, nulo não existe
// e vazio existe mas sem informação na memoria

$nulo = NULL;
