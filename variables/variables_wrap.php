<?php

function getName(): string
{
    return ['Julian', 'Manuel', 'Valerian', 'Gabriel', 'Arthur', 
    'Guillermo', 'Amelien', 'Marc', 'Francesco', 'Jean', 'Caetano',
    'Gabriel'][rand(0,11)];
}

function getAge(): int
{
    return rand(18, 55);
}

function getMetier(): string
{
    return ['Pompier', 'Infirmier', 'Conseiller', 'Professeur', 'Web designer', 
    'Développeur', 'Graphiste', 'Illustrateur', 'Mécanicien', 'Musicien', 
    'Médiateur','Médecin'][rand(0,11)];
}

function lireLigne()
{
    global $compteur;
    global $data1;
    global $data2;
    global $data3;

    $tab = [$data1, $data2, $data3];
    if ($compteur < 3) {
        $data = $tab[$compteur];
        $compteur++;
    } else {
        $data = "";
    }
    return $data;
}

$compteur = 0;
global $compteur;
$data1 = getName();
global $data1;
echo $data1, "\n";
$data2 = getAge();
global $data2;
echo $data2, "\n";
$data3 = getMetier();
global $data3;
echo $data3, "\n";
include './variables.php';