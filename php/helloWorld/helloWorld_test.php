<?php 

include "./utile.php";

extract(execUserCode('./helloWorld.php'));

if ($retval===0 && count($output) === 1 && $output[0]==='Hello World !') {
    include ('./helloWorld.php');
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel 'Félicitations ! 🎉 Tu viens de créer ton premier programme PHP.'\r\n");
} else {
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel 'Vérifie que ton code est le même ci-dessus.'\r\n");
    if (!str_contains($answer, '<?php')) {
        echo("TECHIO> message --channel 'Vérifie que tu as bien écrit la balise ouvrante PHP.'\r\n");
    }
    if (!str_contains($answer, ';')) {
        echo("TECHIO> message --channel 'N'aurais-tu pas oublié le point virgule à la fin de l'instruction ?'\r\n");
    }
    if (!str_contains($answer, 'echo')) {
        echo("TECHIO> message --channel 'As-tu écrit correctement la commande echo ?'\r\n");
    }
    if (!str_contains($answer, '"Hello World !"') && !str_contains($answer, "\'Hello World !\'")) {
        echo("TECHIO> message --channel 'Vérifie que ta chaîne de caractère \"Hello World !\" est correctement écrit.'\r\n");
    }
}
?>