<?php

// ************* Exécution du programme ************
$file = './calculatrice.php';
$wrap = './calculatrice_wrap.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $input = [];
    $retval = 1;
} else {
    exec('php ' . $wrap, $output);
    $input = [
        'n1' => $output[0],
        'n2' => $output[1],
        'op' => $output[2],
    ];
    unset($output[0]);
    unset($output[1]);
    unset($output[2]);
    $output = array_values($output);
    $retval = 0;
}

// *************** Vérification du programme *************

switch ($input['op']){
    case 'addition':
        $result = $input['n1'] + $input['n2'];
        break;
    case 'multiplication':
        $result = $input['n1'] * $input['n2'];
        break;
    case 'soustraction':
        $result = $input['n1'] - $input['n2'];
        break;
}
if (count($output)===1 && $output[0] == $result)
{
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
}

echo("TECHIO> message --channel 'Donnée entrantes' n1 = " . $input['n1'] . "\r\n");
echo("TECHIO> message --channel 'Donnée entrantes' n2 = " . $input['n2'] . "\r\n");
echo("TECHIO> message --channel 'Donnée entrantes' op = '" . $input['op'] . "'\r\n");
echo("TECHIO> message --channel 'Résultat attendu' " . $result . "\r\n");


// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}