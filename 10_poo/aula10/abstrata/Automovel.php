<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMarcha($marcha);

}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade)
    {

        echo "O veiculo acelerou até" . $velocidade . "km/h";

    }

    public function frenar($velocidade)
    {

        echo " O veiculo frenou até " . $velocidade . "km/h";

    }

    public function trocaMarcha($marcha)
    {

        echo "O veiculo engatou a marcha " . $marcha;

    }
}