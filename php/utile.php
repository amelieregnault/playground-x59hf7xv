<?php

/**
 * Renvoie le code sous forme de chaîne de caractères
 * l'output obtenu, ainsi que la valeur de retour.
 *
 * @param string $file
 * @return array
 */
function execUserCode(string $file): array
{
    $answer = file_get_contents($file);
    
    if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
        $output = [];
        $retval = 1;
    } else {
        exec('php '. $file, $output, $retval);
    }

    return [
        'answer' => $answer,
        'output' => $output,
        'retval' => $retval,
    ];
}

function execUserCodeWithWrap(string $file, string $wrap): array
{
    $answer = file_get_contents($file);
    
    if (str_contains($answer, 'exec') || str_contains($answer, 'script')) {
        $output = [];
        $input = [];
        $retval = 1;
    } else {
        exec('php '. $wrap, $output);
        $input = $output[0];
        unset($output[0]);
        $retval = 0;
    }

    return [
        'answer' => $answer,
        'input' => $input,
        'output' => $output,
        'retval' => $retval,
    ];
} 