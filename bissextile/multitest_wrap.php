<?php

function getAnnee(int $compteur): int
{
    return [2003, 2000, 2020, 2100][$compteur];
}

function lireLigne()
{
    global $data1;
    return $data1;
}

$data1 = 2000;
global $data1;
for ($compteur=0; $compteur < 3; $compteur++) {
    
    $data1 = getAnnee($compteur);
    echo $data1, "\n";

    include './bissextile.php';
}

