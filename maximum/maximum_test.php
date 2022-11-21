<?php

// ************* Exécution du programme ************
$file = './maximum.php';
$wrap = './maximum_wrap.php';
$multitest = './multitest_wrap.php';
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

$correct = true;


$max = $input['n1'] > $input['n2'] ? $input['n1'] : $input['n2'];
if (count($output)===1 && $output[0] == $max)
{

    exec('php '. $multitest, $out);
    $taille = count($out);

    for ($i = 0; $i < $taille; $i = $i + 3){
        $n1 = $out[$i];
        $n2 = $out[$i + 1];
        $attendu= $n1 > $n2 ? $n1 : $n2;
        if ($out[$i + 2] !== $attendu){
            echo("TECHIO> success false \r\n");
            $correct = false;
            break;
        } 
    }

    if ($correct) {
        echo("TECHIO> success true \r\n");
        echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
    }
} else {
    echo("TECHIO> success false  \r\n");
}

echo("TECHIO> message --channel 'Donnée entrantes' n1 = " . $input['n1'] . "\r\n");
echo("TECHIO> message --channel 'Donnée entrantes' n2 = " . $input['n2'] . "\r\n");
echo("TECHIO> message --channel 'Résultat attendu' " . $max . "\r\n");

if (!$correct){
    echo("TECHIO> message --channel 'Test complémentaire' Ton programme ne fonctionne pas pour les nombres n1 = " . $n1 . " et n2 = " . $n2 . "\r\n");
}

// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}