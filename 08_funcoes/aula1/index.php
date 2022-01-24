<?php

// funções definidas por o usuario use function 
// exemplo comum função para calcular o aumento salarial

function ola(){
    return "Olá mundo! <br>";
}

// existem diferentes maneiras de chamar e usar função
echo ola();

$frase = ola();

//quantos caracteres exixtem na variavel frase (ele conta a tag br)
echo strlen($frase);

