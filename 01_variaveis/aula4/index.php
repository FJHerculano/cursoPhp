<?php

$nome = "Herculano";

//Trabalhando com criação e chamada de função

// variavel global é a mesma em toda a aplicação
function teste(){
    global $nome;
    echo $nome;
}


// Variavel local só sera lida na sua função
// independente de ser nome igual a uma existente 
// fora da função;
function teste2(){
    $nome = "francisco";
    echo "<br/>";
    echo $nome. " Agora no teste2";
}

teste();
teste2();