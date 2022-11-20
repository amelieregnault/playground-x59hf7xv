<?php

// ************* Exécution du programme ************
$file = './variables.php';
$wrap = './variables_wrap.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $input = [];
    $retval = 1;
} else {
    exec('php ' . $wrap, $output);
    $input = [
        'name' => $output[0],
        'age' => $output[1],
        'metier' => $output[2],
    ];
    unset($output[0]);
    unset($output[1]);
    unset($output[2]);
    $output = array_values($output);
    $retval = 0;
}

// *************** Vérification du programme *************

$phrase ="Tu es " . $input['name'] . ", tu as " . $input['age'] . " ans et tu es "
  . $input['metier'] . ".";
if (count($output)===1 && $output[0] === $phrase)
{
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel 'Affichage attendu' " . $phrase . "\r\n");
}

// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}