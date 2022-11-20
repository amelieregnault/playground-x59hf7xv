<?php

// ************* Exécution du programme ************
$file = './maximum.php';
$wrap = './maximum_wrap.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $input = [];
    $retval = 1;
} else {
    exec('php ' . $wrap, $output);
    $input = [
        'n1' => $output[0],
        'n2' => $output[1]
    ];
    unset($output[0]);
    unset($output[1]);
    $output = array_values($output);
    $retval = 0;
}

// *************** Vérification du programme *************

$max = $input['n1'] > $input['n2'] ? $input['n1'] : $input['n2'];
if (count($output)===1 && $output[0] == $max)
{
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
}

echo("TECHIO> message --channel 'Donnée entrantes' n1 = " . $input['n1'] . "\r\n");
echo("TECHIO> message --channel 'Donnée entrantes' n2 = " . $input['n2'] . "\r\n");
echo("TECHIO> message --channel 'Résultat attendu' " . $max . "\r\n");


// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}