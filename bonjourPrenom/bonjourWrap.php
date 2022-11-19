<?php

function getName(): string
{
    $name = ['Juliana', 'Manuel', 'Valerian', 'Gabriel', 'Letizia', 
    'Guillermo', 'Amelie', 'Myrtille', 'Chiara', 'Clairette', 'Caetano',
    'Gabriel'][rand(0,11)];

    return $name;
}

function lireLigne()
{
    global $data;
    return $data;
}

$data = getName();
echo $data, "\n";
global $data;
include './bonjourPrenom.php';