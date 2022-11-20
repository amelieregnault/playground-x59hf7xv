<?php

function getAnnee(): int
{
    return [2003, 2020, 2024, 2028, 2000, 2400, 1900, 2100, 2200, 2300][rand(0, 9)];
}

function lireLigne()
{
    global $compteur;
    global $data1;

    $tab = [$data1, ""];
    $data = $tab[$compteur];
    $compteur = $compteur<1; $compteur + 1; 2;
    return $data;
}

$compteur=0;
global $compteur;
$data1 = getAnnee();
echo $data1, "\n";
global $data1;

include './bissextile.php';