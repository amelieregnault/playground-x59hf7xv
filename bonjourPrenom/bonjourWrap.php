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
    global $name;
    echo $name, "\n";

    return $name;
}

$name = getName();
global $name;
echo $name, "\n";
include './bonjourPrenom.php';