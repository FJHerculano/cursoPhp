<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "<br>";
        echo " AS SESSÕES ESTIVEREM DESABILITADAS";
        break;
        
    case PHP_SESSION_NONE:
        echo "<br>";
        echo "AS SESSÕES ESTIVEREM HABILITADAS, MAS NENHUMA EXISTE";
        break;
        
    case PHP_SESSION_ACTIVE:
        echo "<br>";
        echo "AS SESSÕES ESTIVER EM HABILITADAS, E UMA EXISTIR";
        break;
        
    
}