<?php
$test1 = 3;
$test2 = 6;

if ($test1 == $test2){
    echo "gelijk" . "<br>";
} else {
    echo "ongelijk" . "<br>";
}

if($test1 === $test2){
    echo "test 1 en test 2 zijn identiek" . "<br>";
} else {
    echo "test 1 en test 2 zijn niet identiek" . "<br>";
}

if ($test1 > $test2){
    echo "Test 1 is groter dan test 2" . "<br>";
} else {
    echo "test 1 is kleiner dan test 2" . "<br>";
}

if ( $test1 >= $test2){
    echo "Test 1 is groter of gelijk aan test 2" . "<br>";
} else {
    echo "test 1 is kleiner en niet gelijk aan test 2";
}


?>