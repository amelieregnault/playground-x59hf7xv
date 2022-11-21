<?php 

// ********* Exécution du code de l'utilisateur *********
$file = './for1.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $retval = 1;
} else {
    exec('php '. $file, $output, $retval);
}

// ******** Vérification du code de l'utilisateur ********
$correct = true;
foreach ($output as $line){
    if ($line !== '* * * * *'){
        $correct = false;
        break;
    }
}
$nbLignes = count($output);
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

for ($compteur = 0; $compteur < 5; $compteur++){
    echo("TECHIO> message --channel 'Résultat attendu' * * * * *\r\n"); 
}

// ************* Exécution du programme *************
include ($file);
