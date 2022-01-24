<?php

$nome = "francisco herculano";

// minisculo para maisculo
//echo strtoupper($nome);

$nome = strtoupper($nome);

echo $nome;

// minusculo
$nome = strtolower($nome);

echo "<br>";

echo $nome;


// primeira letra de todas as palavras na frase maiscula
$nome = ucfirst($nome);

echo "<br>";

echo $nome;

// primeira letra da frase fica maiscula
$nome = ucwords($nome);

echo "<br>";

echo $nome;

// muda caracteres ao seu gosto, exceto com acentos 
$nome = str_replace("o", "0", $nome);
$nome = str_replace("a", "@", $nome);

echo "<br>";

echo $nome;


