<?php

// ************* Exécution du programme ************
$file = './calculatrice.php';
$wrap = './calculatrice_wrap.php';
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

function getResult($s1, $s2, $op){
    switch ($op){
        case 'addition':
            $res = $s1 + $s2;
            break;
        case 'multiplication':
            $res = $s1 * $s2;
            break;
        case 'soustraction':
            $res = $s1 - $s2;
            break;
    }
    return $res;
}
$correct = true;
$result = getResult($input['n1'], $input['n2'], $input['op']);

if (count($output)===1 && $output[0] == $result)
{
    exec('php '. $multitest, $out);
    $taille = count($out);

    for ($i = 0; $i < $taille; $i = $i + 4){
        $n1 = $out[$i];
        $n2 = $out[$i + 1];
        $op = $out[$i + 2];
        
        $attendu= getResult($n1, $n2, $op);
        if ($out[$i + 3] != $attendu){
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
echo("TECHIO> message --channel 'Donnée entrantes' op = \'" . $input['op'] . "\'\r\n");
echo("TECHIO> message --channel 'Résultat attendu' " . $result . "\r\n");


if (!$correct){
    echo("TECHIO> message --channel 'Test complémentaire' Ton programme ne fonctionne pas pour l'opération " . $op . "\r\n");
}

// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}