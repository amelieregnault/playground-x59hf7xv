<?php

function getCarte1(): string
{
    $name = ['Abra', 'Machoc', 'Chetiflor', 'Tentacool', 'Racaillou', 
    'Ponyta', 'Ramoloss', 'Canarticho', 'Doduo', 'Otaria', 'Tadmorv',
    'Kokiyas'][rand(0,11)];

    return $name;
}

function getCarte2(): string
{
    $name = ['Fantominus', 'Onix', 'Soporifix', 'Krabby', 'Voltorbe', 
    'Noeunoeuf', 'Osselait', 'Kicklee', 'Chiara', 'Smogo', 'Leveinard',
    'Magicarpe'][rand(0,11)];

    return $name;
}

function lireLigne()
{
    global $compteur;
    global $data1;
    global $data2;

    $tab = [$data1, $data2];
    if ($compteur < 2) {
        $data = $tab[$compteur];
        $compteur++;
    } else {
        $data = "";
    }

    return $data;
}
$compteur = 0;
global $compteur;
$data1 = getCarte1();
global $data1;
echo $data1, "\n";
$data2 = getCarte2();
global $data2;
echo $data2, "\n";

include './pokemon.php';

echo $carte1, "\n";
echo $carte2, "\n";