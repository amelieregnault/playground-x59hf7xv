<?php 

// ********* Exécution du code de l'utilisateur *********
$file = './for2.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $retval = 1;
} else {
    exec('php '. $file, $output, $retval);
}

// ******** Vérification du code de l'utilisateur ********

$nbLignes = count($output);
if ($nbLignes !== 5) {
   $correct = false;
} else {
    $correct = true;
    for($i = 1; $i < 5; $i++){
        if ($output[$i-1] != $i*2){
            $correct = false;
            break;
        }
    }
}

if ($correct && str_contains($answer, 'for')) {
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨Bien joué !' Tu as réussi !\r\n");
} else if ($retval === 0) {
    echo("TECHIO> success false  \r\n");
    if (!str_contains($answer, 'for')) {
        echo("TECHIO> message --channel 'Contraintes' Tu dois utiliser une strucure de contrôle for.\r\n"); 
    } 
} else {
    echo("TECHIO> success false  \r\n");
}

for ($compteur = 2; $compteur <= 10; $compteur = $compteur + 2){
    echo("TECHIO> message --channel 'Résultat attendu' ". $compteur ."\r\n"); 
}

// ************* Exécution du programme *************
include ($file);
