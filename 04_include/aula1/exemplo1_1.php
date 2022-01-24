<?php

// importações são feitas com include e require 
// sendo que o include tenta continuar executando mesmo  
// com erros, e o require busca se existe ou se tem erro
// se tiver um ou outro ele para de executar
include "exemplo1.php";

$resultado = somar(10,25);

echo $resultado;