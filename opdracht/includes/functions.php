<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{
    $producten = array("Appels","Peren","bananen","Kersen","Mango's","Kiwi","Watermeloenen","Mandarijnen","Aardbijen","Ananas");
    $bedrag = array(0.25,0.30,0.30,0.40,0.40,0.35,1.70,0.30,0.25,0.40);
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

?>