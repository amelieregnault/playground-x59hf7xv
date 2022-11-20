<?php

// ************* Exécution du programme ************
$file = './pokemon.php';
$wrap = './pokemon_wrap.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $input = [];
    $retval = 1;
} else {
    exec('php ' . $wrap, $output);
    $input = [
        'carte1' => $output[0],
        'carte2' => $output[1],
    ];
    unset($output[0]);
    unset($output[1]);
    $output = array_values($output);
    $retval = 0;
}

// *************** Vérification du programme *************


if (count($output)===2 && 
    $output[0] === $input['carte2'] && 
    $output[1] === $input['carte1'])
{
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
}

echo("TECHIO> message --channel 'Données initiales' carte 1 : " . $input['carte1'] . "\r\n");
echo("TECHIO> message --channel 'Données initiales' carte 2 : " . $input['carte2'] . "'\r\n");
echo("TECHIO> message --channel 'Résultat attendu' carte 1 : " . $input['carte2'] . "\r\n");
echo("TECHIO> message --channel 'Résultat attendu' carte 2 : " . $input['carte1'] . "\r\n"); 
if (count($output) >= 2){
    echo("TECHIO> message --channel 'Résultat obtenu' carte 1 : " . $carte1 . "\r\n");
    echo("TECHIO> message --channel 'Résultat obtenu' carte 2 : " . $carte2 . "\r\n"); 
}
