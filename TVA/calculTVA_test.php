<?php

// ************* Exécution du programme ************
$file = './calculTVA.php';
$wrap = './calculTVA_wrap.php';
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

// *************** Vérification du programme *************$tva
$calcul = $input * 1.20;
if (count($output)===1 && $output[0] == $calcul)
{
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
}

echo("TECHIO> message --channel 'Données entrantes' Prix HT : " . $input . "\r\n");
echo("TECHIO> message --channel 'Résultat attendu' " . $calcul . "\r\n");


// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}