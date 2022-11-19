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
    global $age;
    global $name;
    global $metier;

    switch ($compteur){
        case 0:
            $data = $name;
            break;
        case 1:
            $data = $age;
            break;
        case 2:
            $data = $metier;
            break;
        default:
            $data = "";
    }
    echo $data, "\n";
    $compteur++;
    return $data;
}

$compteur = 0;
global $compteur;
$name = getName();
global $name;
$age = getAge();
global $age;
$metier = getMetier();
global $metier;
include './variables.php';