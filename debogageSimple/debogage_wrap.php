<?php

function getLength(): int
{
    return rand(2, 8) * 10;
}


function lireLigne()
{
    global $compteur;
    global $data1;
    global $data2;
    global $data3;
    global $data4;

    $tab = [$data1, $data2, $data3, $data4];
    if ($compteur < 4) {
        $data = $tab[$compteur];
        $compteur++;
    } else {
        $data = "";
    }

    return $data;
}

$compteur = 0;
global $compteur;
$data1 = getLength();
global $data1;
echo $data1, "\n";
$data2 = getLength();
global $data2;
echo $data2, "\n";
$data3 = getLength();
global $data3;
echo $data3, "\n";
$data4 = getLength();
global $data4;
echo $data4, "\n";

include './debogage.php';