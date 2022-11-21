<?php

function getNumber(): int
{
    return rand(1, 20);
}

function getOperateur(): string
{
    return ['addition', 'soustraction', 'multiplication'][rand(0,2)];
}

function lireLigne()
{
    global $compteur;
    global $data1;
    global $data2;
    global $data3;

    $tab = [$data1, $data2, $data3, ""];
    $data = $tab[$compteur];
    $compteur ++;
    return $data;
}


global $compteur;
global $data1;
global $data2;
global $data3;

foreach (['addition', 'soustraction', 'multiplication'] as $op){ 
    $compteur=0;
    $data1 = getNumber();
    echo $data1, "\n";
    $data2 = getNumber();
    echo $data2, "\n";
    $data3 = $op;
    echo $data3, "\n";
    
    include './calculatrice.php';
}