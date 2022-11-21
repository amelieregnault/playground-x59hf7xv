<?php

function getNombreSup10(): int
{
    return rand(1, 9);
}

function getNombreInf10(): int
{
    return rand(11, 20);
}

function lireLigne()
{
    global $compteur;
    global $data1;
    global $data2;
    $data = [$data1, $data2][$compteur];
    $compteur = $compteur + 1;
    return $data;
}

global $compteur;
global $data1;
global $data2;

// cas de l'égalité
$compteur = 0;
$data1 = 1;
echo $data1, "\n";
$data2 = 1;
echo $data2, "\n";
include './maximum.php';


// cas où n1 > n2
$compteur = 0;
$data1 = getNombreSup10();
$data2 = getNombreInf10();
echo $data1, "\n";
echo $data2, "\n";
include './maximum.php';

// cas où n2 > n1
$compteur = 0;
$data1 = getNombreInf10();
$data2 = getNombreSup10();
echo $data1, "\n";
echo $data2, "\n";
include './maximum.php';

