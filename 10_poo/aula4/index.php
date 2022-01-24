<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this ->  logradouro = $a; 
        $this ->  numero = $b;
        $this ->  cidade = $c;
    
    }

    public function __destruct(){

        var_dump("DESTRUIR");
        echo "<br>";

    }

    public function __toString(){
        
        return $this ->logradouro. ", " .$this->numero. ", ". $this->cidade;
    
    }

}

$meuEndereco = new Endereco(" Rua do Horto", "123", "Juazeiro do norte");

var_dump($meuEndereco);

echo "<br>";
unset($meuEndereco);

echo "<br>";

echo $meuEndereco;