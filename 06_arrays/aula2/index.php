<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'  => 'Francisco',
    'idade' => 25,
 ));

 array_push($pessoas, array(
    'nome'  => 'Luan',
    'idade' => 24,
 ));

 array_push($pessoas, array(
    'nome'  => 'David',
    'idade' => 30,
 ));
    
echo json_encode($pessoas);
