<?php

$annee = lireLigne();

if ($annee % 4 === 0){
    if ($annee % 100 === 0) {
        if ($annee % 400 === 0) {
            echo $annee . " est une année bissextile.\n";
        } else {
            echo $annee . " n'est pas une année bissextile.\n";
        }
    } else {
        echo $annee . " est une année bissextile.\n";
    }
} else {
    echo $annee . " n'est pas une année bissextile.\n";
}

