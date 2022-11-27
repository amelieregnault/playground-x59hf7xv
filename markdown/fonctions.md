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

Maintenant, si nous devons encore faire le produit des éléments d'un tableau, nous n'avons pas besoin de réécrire le code correspondant, mais 
simplement d'appeler la fonction `calculProduit()` avec un autre tableau en paramètre.

Voyons plus en détail comme cela fonctionne.

## Création d'une fonction

Pour créer une fonction, nous allons utiliser le mot-clé `function` suivi du nom de la fonction, afin de pouvoir si référer quand nous en aurons besoin, et d'une paire de parenthèses, qui est obligatoire, même s'il n'y a pas de paramètres. Le code de la fonction étant un bloc, il faut l'entourer d'une paire d'accolade. 

Il faut savoir que toutes les variables créées dans une fonction sont propres à la fonction et ne sont plus accessibles une fois l'exécution de la fonction terminée. Nous ne pouvons donc pas utiliser ce moyen pour récupérer le résultat d'un calcul. On utilise donc le mot-clé `return` pour retourner la valeur calculée.

A l'inverse, nous pouvons avoir besoin de variables qui se trouve à l'extérieur de la fonction pour faire nos calculs, et là aussi, la fonction n'y pas accès.
Rappelons que la fonction est vraiment à l'extérieur du programme principal. Dans ce cas, nous ajouterons des paramètres à la fonction, un pour chaque élément nécessaire. Une fois déclarée, les paramètres sont comme des variables. 

Cela nous donne donc la syntaxe suivante : 

```
function nomFonction ($param1, ...)
{
    le code de la fonction
    return expression;
}
```

Le mot-clé `return` va retourner l'expression qui le suit et terminer la fonction. Cela signifie que même s'il y a du code après le return, celui-ci ne sera
pas exécuté, comme on peut le constater dans le programme suivant : 

``` php runnable
<?php
function plusieursReturn()
{
    return "Je vais m'afficher";
    return "Je ne vais pas m'afficher";
}

echo plusieursReturn();
```

*NB : le nom de la fonction suit les mêmes règles et conventions de nommage des variables (Attention, ne mettez pas de `$` pour les noms de fonction).*


## Appel d'une fonction

Une fonction étant en dehors du programme principal, celle-ci ne sera jamais exécutée si nous ne l'appelons pas, i.e. si nous n'y faisons pas référence.

Pour appeler une fonction, il suffit d'indiquer son nom, suivi d'une paire de parenthèses, contenant éventuellement les valeurs à attribuer à ses paramètres, comme ceci : `nomFonction(expr1,...)`.

L'appel d'une fonction est une expression si la fonction retourne une valeur, sinon c'est une instruction.

## Exemples

Voyons plusieurs fonctions pour différents cas de figures.

### Une fonction sans paramètre

Créons une fonction qui va retourner un tableau de 10 nombres aléatoires.

``` php runnable
<?php
function tableauAleatoire(){
    $tirage = [];
    for ($i = 0 ; $i < 10 ; $i++) {
        $tirage[] = rand(1, 99);
    }
    return $tirage;
}

print_r(tableauAleatoire());
```

### Une fonction avec deux paramètres
Une fonction qui calcule la puissance n-ième d'un nombre.
``` php runnable
<?php
function puissance($num, $n)
{
    if ($n == 0) {
        return 1;
    }

    $p = 1;
    for ($i = 0; $i < $n; $i++){
        $p = $p * $num;
    }
    return $p;
}

echo puissance(5, 2), "\n";
echo puissance(5, 10), "\n";
```

## Explications supplémentaires

**Est-ce que je peux appeler une fonction depuis une autre fonction ?**

**Est-ce que je peux utiliser l'appel d'une fonction comme paramètre d'une autre fonction ?**

**Que se passe-t-il si je modifie la valeur d'un paramètre dans ma fonction ?**

**Pourquoi ne pas toujours utiliser un `echo` et un `print_r` dans la fonction pour afficher le résultat, au lieu du `return` ?** 

**Quand la documentation d'une fonction prédéfinie dans PHP, il y a plein de types partout, ça correspond à quoi ?**

**Ca sert à quoi les deux slashs `//` dans le premier exemple ?**
