<?php

//transformando o json em codigo

$json = '[
    {"nome" : "francisco", "idade" : 25},
    {"nome" : "herculano", "idade" : 25},
]';

$data = json_decode($json, true);

var_dump($data);