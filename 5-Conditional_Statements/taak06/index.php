<?php
$var1 = 12;
$var2 = 25;

if ( $var1 > 10 && $var1 < 30){
    echo "Var1 is groter dan 10 en var2 is kleiner dan 30." . "<br>";
} else {
    echo "Var1 is kleiner dan 10 of var1 is groter dan 30." . "<br>";
}

if ( $var1 >= 10 || $var2 < 40){
    echo "var1 is groter of gelijk aan 10 en kleiner dan 40" . "<br>";
} else{
    echo "klopt niet." . "<br>";
}

if ( $var1 == 12 xor $var2 == 100){
    echo "een van de twee variable zijn gelijk" . "<br>";
} else{
    echo "ze kloppen allebei wel of ze kloppen allebei niet."  . "<br>";
}

if ( !$var2 == 25){
    echo "Een van de variable klopt." . "<br>";
} else {
    echo "een van de twee of allebei de variable kloppen.";
}

//de uitroep teken begrijp ik nog niet erg.
?>