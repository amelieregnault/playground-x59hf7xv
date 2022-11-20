<?php

function getNumber(): int
{
    return rand(1, 20);
}

function lireLigne()
{
    global $compteur;
    global $data1;
    global $data2;

    $tab = [$data1, $data2, ""];
    $data = $tab[$compteur];
    $compteur = $compteur<2; $compteur + 1; 2;
    return $data;
}

$data1 = getNumber();
echo $data1, "\n";
global $data1;
$data2 = getNumber();
echo $data2, "\n";
global $data2;
include './maximum.php';