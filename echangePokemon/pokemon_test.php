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

echo("TECHIO> message --channel 'Initial -> carte 1 : " . $input['carte1'] . 
    " || carte 2 : " . $input['carte2'] ."'\r\n");
echo("TECHIO> message --channel 'Attendu -> carte 1 : " . $input['carte2'] . 
    " || carte 2 : " . $input['carte1'] ."'\r\n");
if (count($output) >= 2){
    echo("TECHIO> message --channel 'Obtenu -> carte 1 : " . $output[0] . 
        " || carte 2 : " . $output[1] ."'\r\n");
}

// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}