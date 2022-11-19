<?php

function getNumber(): int
{
    return rand(50, 200);
}

function lireLigne()
{
    global $data;
    return $data;
}

$data = getNumber();
echo $data, "\n";
global $data;
include './calcul.php';