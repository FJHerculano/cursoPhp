<?php

function soma(int ...$valores){

    return array_sum($valores);
    
} 

echo soma( 2 , 5 );
echo "<br>";

echo soma( 1.5 , 2.5);
echo "<br>";

echo soma( 10 , 24);
echo "<br>";


