<?php

// ************* Exécution du programme ************
$file = './debogage.php';
$wrap = './debogage_wrap.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $input = [];
    $retval = 1;
} else {
    exec('php ' . $wrap, $output);
    $input = [
        'width1' => $output[0],
        'length1' => $output[1],
        'width2' => $output[2],
        'length2' => $output[3],
    ];
    for ($i = 0; $i < 4; $i++){
        unset($output[$i]);
    }
    $output = array_values($output);
    $retval = 0;
}

// *************** Vérification du programme *************

$aire = $input['width1'] * $input['length1'] + $input['width2'] * $input['length2'];
$phrase = "L'Aire totale est égale à " . $aire .  " cm²";
if (count($output)===1 && $output[0] === $phrase){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨ Bien joué !'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
}

echo("TECHIO> message --channel 'Données entrantes' Rectangle 1 -> longueur : " . $input['length1'] . " ; largeur : " . $input['width1'] . "'\r\n");
echo("TECHIO> message --channel 'Données entrantes' Rectangle 2 -> longueur : " . $input['length2'] . " ; largeur : " . $input['width2'] . "'\r\n");
echo("TECHIO> message --channel 'Résulat attendu' " . $phrase . "'\r\n");
if (!empty($output[0]) && !str_contains($output[0], 'Warning') && !str_contains($output[0], 'error')){
    echo("TECHIO> message --channel 'Résultat obtenu'" . $output[0] ."'\r\n");
}

// ************** Exécution du programme **************
foreach ($output as $line){
    echo $line, "\n";
}