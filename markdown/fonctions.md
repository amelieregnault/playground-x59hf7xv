# Les fonctions

Nous sommes maintenant capable d'écrire du code pour résoudre à peu près n'importe quel problème. Mais vous allez voir rapidement que le code que 
vous allez écrire ne sera pas satisfaisant pour écrire de gros programme. Celui va devenir très long, et de nombreux morceaux de code vont se 
répéter, car il n'est pas rare de devoir faire plusieurs fois la même chose dans un programme.

Votre programme sera alors peu lisible et comportera de nombreuses répétitions. Ceci n'est pas souhaitable car :
- cela augmente le risque de bugs, plus il y a de code, plus il y a potentiellement de bugs
- cela va rendre plus compliqué le modification. Si nous souhaitons modifier du code à un endroit du code qui est répété plusieurs fois, il faudra
  faire cette modification autant de fois que nécessaire, avec un risque d'oublier un endroit et un risque d'introduire des bugs.

Pour éviter le code répété "localement", nous avons vus qu'il était possible d'utiliser une boucle, mais si le code répété se trouve dispatché à différents
endroits du programme, nous pourrons utiliser une fonction.

Une fonction va nous permettre de créer du code qui sera à l'extérieur de notre programme principal et que nous pourrons appeler lorsque nous en aurons 
besoin. Chaque fonction peut être considérée comme un mini programme qui a un seule objectif, par exemple, calculer le produit des valeurs d'un tableau.
Admettons que nous ayons besoin de faire ce calcul plusieurs fois dans notre code, et créer une fonction qui va calculer et nous retourner le résultat.

``` php runnable
<?php

// Déclaration de la fonction
function calculerProduit($nombres)
{
    $produit = 1;
    foreach ($nombres as $nb){
        $produit = $produit * $nb;
    }
    return $produit;
}

// Programme principal
echo "Un programme pour tester les fonctions \n";

$prod = calculerProduit([3, 5, 2, 5, 8, 10]);

echo $prod, "\n";

```