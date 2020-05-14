<?php
$prod_besteld = 5;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo $prijs . "<br>";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo $prijs . "<br>";
} else {
    $prijs = 1.00;
    echo $prijs;
}

$prod_besteld = 13;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo $prijs . "<br>";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo $prijs . "<br>";
} else {
    $prijs = 1.00;
    echo $prijs;
}

$prod_besteld = 30;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo $prijs . "<br>";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo $prijs . "<br>";
} else {
    $prijs = 1.00;
    echo $prijs;
}
?>