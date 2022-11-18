<?php

/**
 * Renvoie le code sous forme de chaîne de caractères
 * l'output obtenu, ainsi que la valeur de retour.
 *
 * @param string $file
 * @return array
 */
function execUserCode($file): array
{
    $answer = file_get_contents('./helloWorld.php');
    
    if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
    $output = [];
    $retval = 1;
    } else {
        exec('php helloWorld.php', $output, $retval);
    }

    return [
        'answer' => $answer,
        'output' => $output,
        'retval' => $retval,
    ];
}