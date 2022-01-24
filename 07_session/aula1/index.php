<?php

// todas as page precisam do session start exceto que vc tenha 
// um require_once em todas as paginas usando o start que estar em um
// arquivo de organização separado

require_once("config.php");

$_SESSION["nome"] = "Hcode";

