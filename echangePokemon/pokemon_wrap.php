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
    global $carte1;
    global $carte2;
    if ($compteur === 0){
        $data = $carte1;
    } else if ($compteur === 1){
        $data = $carte2;
    } else {
        $data = "";
    }
    echo $data, "\n";
    $compteur++;

    return $data;
}
$compteur = 0;
global $compteur;
$carte1 = getCarte1();
global $carte1;
$carte2 = getCarte2();
global $carte2;

include './pokemon.php';

echo $carte1, "\n";
echo $carte2, "\n";