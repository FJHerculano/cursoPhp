<?php

$frase = "A repetição é mãe do aprendizado.";

$palavra = "mãe";

///traz a posição contando do zero
$q = strpos($frase, $palavra);

// traz o texto que precede q que no caso é a palavra mãe, iniciando a busca do zero
$texto = substr($frase, 0, $q);

var_dump($q);
echo "<br>";
var_dump($texto);
echo "<br>";


// só o $q traz a palavra mãe e se não quiser tem que colocar o
// 20 (que é a posição da palavra)
$texto = substr($frase, 20, $q);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase) );

var_dump($texto2);
echo "<br>";
