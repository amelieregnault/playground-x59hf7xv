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
    $compteur = $compteur<3; $compteur + 1; 2;
    return $data;
}

$compteur=0;
global $compteur;
$data1 = getNumber();
echo $data1, "\n";
global $data1;
$data2 = getNumber();
echo $data2, "\n";
global $data2;
$data3 = getOperateur();
echo $data3, "\n";
global $data3;

include './calculatrice.php';