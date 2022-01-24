<?php

class Pessoa {
  
    public $nome; // Atributo

    public function falar(){ // Metodo

        return " O meu nome é " . $this -> nome;
    
    }
}

$Francisco = new Pessoa();
$Francisco -> nome = "Francisco Herculano";
$Francisco -> falar();