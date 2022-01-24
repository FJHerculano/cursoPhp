<?php
$qualASuaIdade=100;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade <= $idadeCrianca){
    echo "Criança";
} else if ($qualASuaIdade < $idadeMaior){
    echo "Adolescente";
}else if ($qualASuaIdade < $idadeMelhor){
    echo "Adulto";
}else{
    echo "Idoso";
}

echo "<br>";

// outra forma de comparação e é um operador 
// o if de uma linha só
// o sinal de ? é o "se for " , e o sinal de : que é o "se não for"
echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade"