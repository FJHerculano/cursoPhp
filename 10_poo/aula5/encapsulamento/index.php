<?php

class Pessoa{

    public $nome = " Francisco José ";
    protected $idade = 48;
    private $senha = " 123456"; 

    public function verDados(){

        echo $this -> nome . "<br/>";
        echo $this -> idade . "<br/>";
        echo $this -> senha . "<br/>";

    }

}

$objeto = new Pessoa();

// só pode ser impresso os atributos publicos
//echo $objeto -> nome . "<br/>";

// como o metodo é publico os dados são impressos   
$objeto -> verDados();