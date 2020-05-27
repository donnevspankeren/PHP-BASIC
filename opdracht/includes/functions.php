<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
    
}

function getvalue(){
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}

function totaalBedrag(){
    $product = array(
        "0"=>['appels', 'prijs'=> 0.25], "1"=>['peren', 'prijs'=> 0.30],
        "2"=>['bananen', 'prijs'=> 0.30], "3"=>[ 'kersen', 'prijs'=> 0.40],
        "4"=>['mango', 'prijs'=> 0.40], "5" => ['kiwis', 'prijs'=> 0.35],
        "6"=>['watermeloen', 'prijs'=> 1.7], "7" =>['mandarijnen', 'prijs'=> 0.30],
        "8"=>['aardbijen', 'prijs'=> 0.25], "9"=>['ananas', 'prijs'=> 0.4]);
     
    if (isset($_GET['productnummer']) && isset ($_GET['aantal'])){
        if(isset($product[$_GET['productnummer']])){
            echo $product[$_GET['productnummer']]['prijs']*$_GET['aantal'] . " euro";
        }
    }

}

function korting(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';

    switch ($leeftijd){
        case 19:
            echo '0.19 euro';
        break;
        case 18:
            echo "0.18 euro";
        break;
        case 17:
            echo "0.17 euro";
        break;
        case 16:
            echo "0.16 euro";
        break;
        default:
            echo "1 euro";
    }
}
?>