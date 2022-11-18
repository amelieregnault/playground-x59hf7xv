<?php

// ************* Exécution du programme ************
$file = './bonjourPrenom.php';
$wrap = './bonjourWrap.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $input = [];
    $retval = 1;
} else {
    exec('php ' . $wrap, $output);
    $input = $output[0];
    unset($output[0]);
    $output = array_values($output);
    $retval = 0;
}

// *************** Vérification du programme *************

$phrase1 ="Comment t'appelles-tu ? " . $input;
$phrase2 ="Bonjour " . $input;
if (count($output)===2 && 
    $output[0] === $phrase1 && 
    $output[1] === $phrase2)
{
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel 'Vérifie que ton code est le même que dans l’exemple ci-dessus.'\r\n");
}

// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}