<?php

//session_id(bf472e2bf66d0431d84bfe48879adb5e);

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);