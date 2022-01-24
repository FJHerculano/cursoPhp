<?php

// variaveis pre definidas

// essa impressão na tela tera que ser passada após o 
// endereço da pagina pre escrita com uma interrogação
// exemplo ..aula3.php?a=123 (na url)
// (int é uma conversão para inteiro pois sempre será lido como string)
$nome =(int)$_GET["a"];


//var_dump($nome);

//pegando o ip do usuario

$ip = $_SERVER["REMOTE_ADDR"]; //ou
//$ip = $_SERVER["SCRIPT_NAME"]; IMPRIME OUTROS DADOS NA TELA


echo $ip;
