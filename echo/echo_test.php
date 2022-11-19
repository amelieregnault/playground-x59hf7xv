<?php 

// ********* Exécution du code de l'utilisateur *********
$file = './echo.php';
$answer = file_get_contents($file);
    
if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $retval = 1;
} else {
    exec('php '. $file, $output, $retval);
}

var_dump($retval);


// ******** Vérification du code de l'utilisateur ********
$nbLignes = count($output);
if ($retval===0 && $nbLignes >= 3) {
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel '✨Bien joué ! Tu as réussi !'\r\n");
} else if ($retval === 0) {
    echo("TECHIO> success false  \r\n");
    if (!str_contains($answer, '<?php')) {
        echo("TECHIO> message --channel 'La balise ouvrante PHP est absente ou mal écrite.'\r\n"); 
    } else if (!str_contains($answer, 'echo')) {
        echo("TECHIO> message --channel '✏ Rappelles-toi, tu dois utiliser la 
        commande echo pour afficher du texte.'\r\n");  
    } else if (!str_contains($answer, '\n')) {
        echo("TECHIO> message --channel 'Penses à utiliser le caractère \\n pour faire un saut de ligne'\r\n"); 
    } else if ($nbLignes < 3) {
        echo("TECHIO> message --channel 'Ajoute au moins " . 3-$nbLignes . " echo pour afficher suffisamment de lignes'\r\n");
    }
} else {
    echo("TECHIO> success false  \r\n");
}

// ************* Exécution du programme *************
include ($file);
