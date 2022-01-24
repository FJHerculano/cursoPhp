<?php

function ola($texto= "mundo", $periodo = "Bom Dia"){
     return "olá $texto!$periodo <br>";
}

echo ola ();
echo ola ("","");
echo ola ("Francisco", "boa tarde");
echo ola ("Herculano");

