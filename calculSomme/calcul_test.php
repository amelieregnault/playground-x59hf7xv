<?php

// ************* Exécution du programme ************
$file = './calcul.php';
$wrap = './calcul_wrap.php';
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

$calcul = $input * ($input + 1) / 2;
if (count($output)===1 && $output[0] === $calcul)
{
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
}

echo("TECHIO> message --channel 'Donnée entrantes' n = " . $input . "\r\n");
echo("TECHIO> message --channel 'Résultat attendu' " . $calcul . "\r\n");
if (!empty($output[0]) && !str_contains($output[0], 'Warning') && !str_contains($output[0], 'error')){
    echo("TECHIO> message --channel 'Résultat obtenu' " . $output[0] ."\r\n");
}


// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}