<?php

require_once("config.php");

// comando para limpar todas as variaveis sessão ou apenas alguma 
// 

session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

// outro comando de limpeza
session_destroy();
