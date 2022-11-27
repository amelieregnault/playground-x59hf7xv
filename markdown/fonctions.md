# Les fonctions

Nous sommes maintenant capable d'écrire du code pour résoudre à peu près n'importe quel problème. Mais vous allez voir rapidement que, pour un gros programme, 
le code que vous allez obtenir ne sera pas satisfaisant. Celui sera très long, sans organisation réelle, et de nombreux morceaux de code vont se 
répéter, car il n'est pas rare de devoir faire plusieurs fois la même chose dans un programme.

Votre programme sera alors peu lisible et comportera de nombreuses répétitions. Ceci n'est pas souhaitable car :
- cela augmente le risque de bugs. Plus il y a de code, plus il y a potentiellement de bugs
- cela va rendre plus compliqué les modifications. Si nous souhaitons faire une modification dans un morceau de code qui est répété plusieurs fois, il faudra
  faire cette modification autant de fois que nécessaire, avec un risque d'oublier un endroit et un risque d'introduire des bugs.

Pour éviter le code répété "localement", nous avons vus qu'il était possible d'utiliser une boucle, mais si le code répété se trouve dispatché à différents
endroits du programme, nous pourrons utiliser une fonction.

Une fonction va nous permettre de créer du code qui sera à l'"extérieur" de notre programme principal et que nous pourrons appeler lorsque nous en aurons 
besoin. Chaque fonction peut être considérée comme un mini programme qui a un seul objectif, par exemple, calculer le produit des valeurs d'un tableau.
Admettons que nous ayons besoin de faire ce calcul plusieurs fois dans notre code, et créons une fonction qui va calculer et nous retourner le résultat.

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

Voyons plus en détail comment cela fonctionne.

## Création d'une fonction

Pour créer une fonction, nous allons utiliser le mot-clé `function` suivi du nom de la fonction, afin de pouvoir si référer quand nous en aurons besoin, et d'une paire de parenthèses, qui est obligatoire, même s'il n'y a pas de paramètres. Le code de la fonction étant un bloc, il faut l'entourer d'une paire d'accolade. 

Il faut savoir que toutes les variables créées dans une fonction sont propres à la fonction et ne sont plus accessibles une fois l'exécution de la fonction terminée. Nous ne pouvons donc pas utiliser ce moyen pour récupérer le résultat d'un calcul. On utilisera donc le mot-clé `return` pour retourner la valeur calculée.

A l'inverse, nous pouvons avoir besoin de variables qui se trouve à l'extérieur de la fonction pour faire nos calculs, et là aussi, la fonction n'y pas accès.
Rappelons que la fonction est à l'extérieur du programme principal. Dans ce cas, nous ajouterons des paramètres à la fonction, un pour chaque élément nécessaire. Une fois déclarée, les paramètres sont comme des variables. 

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
Créons ne fonction qui calcule la puissance n-ième d'un nombre.
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
echo puissance(2, 10), "\n";
```

*NB: cette fonction existe dans PHP et s'appelle `pow`.*

### Une fonction sans `return`
Créons une fonction qui affiche un carré d'astéristiques pour une taille donnée en paramètre.

``` php runnable
<?php
function printCarre($taille)
{
    for ($i = 0; $i < $taille; $i++){
        for ($j = 0; $j < $taille; $j++){
            echo '* ';
        }
        echo "\n";
    }
}

printCarre(3);
echo "\n";
printCarre(5);
```

Ici, l'appel de la fonction est une instruction et je peux donc l'utiliser directement, sans passer par une variable, un echo ou autres.

## Les fonctions prédéfinies

Un certain nombre de fonctions ont déjà créées dans PHP, et vous pouvez donc les utiliser dans votre code. Vous en connaissez déjà quelques-unes : `rand()`,
`print_r()`, `count()`. 

Avant de vous lancer dans une fonction compliquée, vous pouvez vérifiez que celle-ci n'existe pas déjà. Les pages suivantes de la documentation PHP 
répertorient :
- (les fonctions mathématiques)[https://www.php.net/manual/fr/ref.math.php]
- (les fonctions sur les chaînes de caractères)[https://www.php.net/manual/fr/ref.strings.php]
- (les fonctions sur les tableaux)[https://www.php.net/manual/fr/book.array.php]


## Explications supplémentaires

**Est-ce que je peux appeler une fonction depuis une autre fonction ?**

Oui, nous l'avons même fait en utilisant la fonction `rand()` dans la fonction `tableauAleatoire`.

**Est-ce que je peux utiliser l'appel d'une fonction comme paramètre d'une autre fonction ?**

Oui, si la fonction retourne une valeur, alors son appel est une expression, et vous pouvez donc le passer en paramètre d'une autre fonction ou
également d'elle-même.

**Est-ce que je peux mettre autant de paramètres que je veux ?**

Oui, vous pouvez, mais pour une question de lisibilité et d'utilisabilité, on limitera ce nombre à 4 ou 5. Il existe plusieurs moyens de passer pleins
de paramètres à une fonction dont l'utilisation de tableaux.

**Pourquoi n'utilise-t-on pas toujours un `echo` et un `print_r` dans une fonction pour afficher le résultat, au lieu du `return` ?** 

Sauf pour les fonctions dont l'objectif est de faire de l'affichage (et non un calcul), on utilisera le return, cela laisse ensuite la possibilité
lors de l'appel, d'en faire ce qu'on veut : le stocker dans une variable ou dans un tableau, l'utiliser dans un autre calcul, l'afficher, ...

**Quand la documentation d'une fonction prédéfinie dans PHP, il y a plein de types partout, ça correspond à quoi ?**

La documentation PHP nous donne la *signature* d'une fonction comme référence. Prenons la signature de la fonction `round()` qui permet d'arrondir un
nombre à la décimale souhaitée. Cette signature est compliquée, décortiquons-là ensemble.

```
round(int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
```

On retrouve le nom de la fonction `round` suivie de ses paramètres. 
- Le premier est décrit par `int|float $num`, et signifie que la fonction attend qu'on lui passe un entier ou un flottant. Si on lui passe autre chose, il y
aura une erreur.  Ce paramètre correspond au nombre à arrondir.
- Le second paramètre est décrit par `int $precision = 0`. Lorsqu'il y a un `=`, cela signifie que le paramètre à une valeur par défaut (ici 0) et que le paramètre est facultatif. 
Le paramètre est de type entier, ce qui est logique, puisqu'il correspond au nombre de décimales à garder.
- Le troisième paramètre est décrit par `int $mode = PHP_ROUND_HALF_UP`. Là, encore c'est un paramètre facultatif qui doit être un entier. Vous me direz que
`PHP_ROUND_HALF_UP` n'est pas un entier. En fait si, c'est un constante à laquelle on a attribué un entier (probablement 0 ou 1). Ici, le développeur a décidé d'utiliser une constante pour rendre plus explicite chaque option possible. Plus loin dans la documentation, on vous indique les différentes constantes que vous pouvez utiliser.

La signature se termine par `: float` et cela correspond au type de la valeur qui est retournée par la fonction. Ici, on nous retournera un flottant, même si
on arrondit à l'entier près.

En résumé, pour utiliser cette fonction, je dois obligatoirement lui passer un nombre, et si je veux que l'arrondi ne soit pas à l'entier, 
ou si je veux un autre mode d'arrondi, il faudra que je le précise en ajoutant ces paramètres.

```php runnable
<?php
echo round(3.5), "\n";
echo round(3.647, 1), "\n";
echo round(3.5, 0, PHP_ROUND_HALF_DOWN), "\n";
echo round(3.667, 1, PHP_ROUND_HALF_DOWN), "\n";
```

A retenir : en précisant les types des arguments d'une fonction, vous obligez le programmeur à transmettre des valeurs d'un certain type et vous pouvez 
ainsi éviter certains bugs, comme par exemple, essayer d'additionner des chaînes de caractères.

**Ca sert à quoi les deux slashs `//` dans le premier exemple ?**

Cela permet d'écrire un commentaire, ce que vous écrivez à la suite du `//` et jusqu'à la fin de la ligne ne sera pas interprété par PHP. Cela permet par exemple de donner des explications concernant notre code.

On peut également écrire des commentaires sur plusieurs lignes en utilisant la paire `/*` et `*/` autour du commentaire.

Un très bon moyen de documenter son code est de donner des noms de variables et surtout de fonctions explicitent, c'est-à-dire qui indique clairement ce 
que fait la fonction.