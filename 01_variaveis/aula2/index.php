<?php 

$nome = "herculano";

$sobrenome = "jose";

// podemos juntar duas strings em uma só variavel

$nomeCompleto = $nome. " " .$sobrenome;

echo $nomeCompleto;

echo"<br/>";


echo $nome;

echo "<br/>";

unset($nome);

if (isset($nome)){
    echo $nome;    
}

