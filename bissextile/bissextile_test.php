<?php

// ************* Exécution du programme ************
$file = './bissextile.php';
$wrap = './bissextile_wrap.php';
$multitest = './multitest_wrap.php';
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

$cond = ($input % 4 === 0 && $input % 100 !== 0) || $input % 400 === 0;
$phrase = $cond ? $input . " est une année bissextile." : $input . " n'est pas une année bissextile.";

if (count($output)===1 && $output[0] === $phrase)
{
    exec('php '. $multitest, $out);
    $taille = count($out);

    $correct = true;
    for ($i = 0; $i < $taille; $i = $i + 2){
        $annee = $out[$i];
        $cond = ($annee % 4 === 0 && $annee % 100 !== 0) || $annee % 400 === 0;
        $attendu= $cond ? $annee . " est une année bissextile." : $annee . " n'est pas une année bissextile.";
        if ($out[$i + 1] !== $attendu){
            echo("TECHIO> success false \r\n");
            $correct = false;
            break;
        } 
    }

    

    if ($correct) {
        
        if (substr_count($answer, 'if') > 1 || substr_count($answer, '?') > 1){
            echo("TECHIO> success false \r\n");
            echo("TECHIO> message --channel 'Tu peux faire mieux' Regarde le nombre de phrases vraiment différentes que tu dois afficher. \r\n");
            echo("TECHIO> message --channel 'Tu peux faire mieux' N'hésite pas à combiner plusieurs conditions en même temps à l'aide des opérateurs logiques. \r\n");
        } else {
            echo("TECHIO> success true \r\n");
            echo("TECHIO> message --channel '✨ Bien joué !' Tu as réussi à simplifier le code ! 😎 \r\n");
        }
    }

} else {
    echo("TECHIO> success false  \r\n");
}


echo("TECHIO> message --channel 'Donnée entrantes' annee = " . $input. "\r\n");
echo("TECHIO> message --channel 'Résultat attendu' " . $phrase . "\r\n");
if (!$correct){
    echo("TECHIO> message --channel 'Test complémentaire' Ton programme ne fonctionne plus pour l'année " . $annee . "\r\n");
}



// ************* Exécution du programme *************
foreach ($output as $line){
    echo $line . "\n";
}