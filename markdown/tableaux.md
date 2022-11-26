# Les tableaux

Nous avons vu qu'il était possible de stocker la valeur d'une expression dans une variable. Mais comment faire si nous avons 
beaucoup de valeurs à stocker, comme par exemple, pour l'ensemble des notes au contrôle d'informatique. En fonction de
la taille de la classe, cela peut facilement représenter 25 notes, voire plus. Cela ne va pas être gérable de créer et d'utiliser
une variable pour chacune de ces notes.

Pour répondre à cette problèmatique, nous pouvons utiliser des tableaux. Les tableaux sont des structures de données qui permettent de 
stocker des données les unes à la suite des autres. En PHP, on pourra retrouver une valeur dans le tableau grâce à sa clé. Chaque clé doit
bien entendu être unique pour un même tableau.

En PHP, les clés peuvent être de deux types différents, soit des nombres entiers, soit des chaînes de caractères. Voici deux exemples de tableaux
le premier utilisant des clés de type entier et le second des chaînes de caractères. 

**Exemple 1 : calendrier d'anniversaire du mois de juin** 
``` php runnable
<?php
print_r(
   [
      3 => 'Julie',
      10 => 'Marc',
      25 => 'Charles',
   ]
);
```

**Exemple 2 : Le tableau de notes d'un étudiant**
``` php runnable
<?php
print_r(
    [
        'Français' => 10,
        'Mathématiques' => 15,
        'Historire-géo' => 11,
        'Anglais' => 16,
    ]
);
```

*NB : La fonction `print_r` permet d'afficher un tableau et de visualiser ainsi les clés et les valeurs qu'il contient.*

## Création d'un tableau

Voyons d'un peu plus près la syntaxe permettant de créer un tableau. Pour créer un tableau, il existe deux deux syntaxes équivalentes qui sont 
la fonction `array()` et son raccourci `[]`. Si l'on ne précise rien de plus, on obtiendra un tableau vide.

Si l'on souhaite y mettre des valeurs dès la création du tableau, on pourra indiquer une liste de clés et d'expression, en utilisant la syntaxe suivante 
`cle => expression`, séparée par des virgules. La clé peut être un entier ou une chaîne de caractères. L'expression sera évaluée et seule sa valeur sera stockée dans le tableau.

La syntaxe pour créer un nouveau tableau est donc la suivante :
```
array (
    cle1 => expression1,
    cle2 => expression2,
    cle3 => expression3,
    ...
)
```

où de manière équivalente : 

```
[
    cle1 => expression1,
    cle2 => expression2,
    cle3 => expression3,
    ...
]
```

NB : Un tableau est une expression et peut donc être stocké dans une valeurs, utilisé dans une expression arithmétiques ou logiques, passé en paramètre 
d'une fonction, et même stocké comme valeur dans un tableau.

## Création d'un tableau sans préciser les clés

Il est très pratique en informatique de numéroter les éléments d'un tableau dans l'ordre en partant de 0 (et c'est d'ailleurs ce que fait la plupart
de langage de programmation quand on créé un tableau). Et c'est tellement pratique, que PHP va se charger de le faire pour vous, si vous ne précisez
pas les clés. 

Essayons de créer un tableau contenant des villes sans préciser les clés, lancez l'exécution et observer le résultat.
``` php runnable
<?php
$villes = [
        'Paris',
        'Nantes',
        'Strasbourg',
        'Nice',
        'Bordeaux',
];

print_r();
```

Il est également possible de mettre le code sur une seule ligne, lorsque celle-ci n'est pas trop longue : 
```
$villes = ['Paris', 'Nantes', 'Strasbourg', 'Nice', 'Bordeaux'];
```

## Ajouter ou modifier des éléments à un tableau existant.

Il est possible d'ajouter un nouveau couple clé/valeur à un tableau existant qui aura préalablement été stocké dans une variable.
Si mon tableau s'appelle `$notes`, je peux ajouter une nouvelle note de la manière suivante.

```
$notes['SVT'] = 9;
```

Si la clé est déjà présente alors la valeur correspondant à cette clé sera modifiée et remplacée par la nouvelle valeur.

De la même façon que pour la création de tableau, si vous ne précisez pas la clé, PHP se chargera de numéroter la nouvelle valeur en 
continuant la numérotation déjà existante.

```
$villes[] = 'Marseille';
```

## Création d'un tableau ligne à ligne.

Il arrivera souvent que nous devions créer les lignes du tableau les unes après les autres, en partant d'un tableau vide. Dans la majorité des cas, 
nous ferons cela pour utiliser une boucle et ainsi éviter des répétitions de code. 
Voici un exemple : on veut tirer au sort 10 numéros et les stocker dans un tableau.

``` php runnable
<?php
$tirage = [];
for ($i = 0 ; $i < 10 ; $i++) {
    $tirage[] = rand(1, 99);
}
print_r($tirage);
```

## Récupération d'une valeur à l'aide de sa clé.

Il est facile de récupérer un élément d'un tableau si l'on connait sa clé. Il suffit d'utiliser l'expression `$tab[cle]`, où `$tab` est la variable qui stocke 
le tableau et `cle` la clé de l'élément à récupérer. 

## Parcours d'un tableau avec une boucle for

Il arrivera souvent que nous souhaitions parcourir l'ensemble des valeurs d'un tableau pour faire un calcul, ou pour afficher les éléments du tableau par exemple. 

La première solution est d'utiliser une boucle **for** (ou **while**), comme dans l'exemple suivant, où l'on souhaite faire le produit de tous les nombres
contenus dans un tableau.

``` php runnable
$nombres = [3, 5, 2, 5, 8, 10];

$produit = 1;
$nbNombres = count($nombres);
for ($i = 0; $i < $nbNombres; $i++){
    $produit = $produit * $nombres[i];
}
echo $produit;
```

Ici, on est obligé d'utiliser la fonction `count()` pour connaître le nombre d'éléments dans le tableau.

On remarquera que cette méthode ne fonctionnera que si les clés sont des entiers et qu'ils sont numérotés dans l'ordre. Il existe donc une autre méthode.

## Parcours d'un tableau avec une boucle foreach

Comme son nom l'indique, ce type de boucle va parcourir **chaque** élément du tableau un par un. À chaque tour de boucle, la clé et la valeur de l'élément
seront stockées dans deux variables qui seront précisées lors de la mise en place de la boucle.

Cela donne donc la syntaxe suivante : 
```
foreach ($tab as $key => $value){
    code à répéter
}
```
où `$tab` est la variable stockant le tableau, `$key` et `$value` les variables permettant de stocker la clé et la valeur de l'élément en train d'être 
parcouru la boucle foreach.

Si nous n'avons pas besoin de la clé, on peut simplement écrire : 
```
foreach ($tab as $value){
    code à répéter
}
```

On peut ainsi réécrire le code permettant de calculer le produit d'un ensemble de nombres de la manière suivante : 
``` php runnable
$nombres = [3, 5, 2, 5, 8, 10];

$produit = 1;
foreach ($nombres as $nb){
    $produit = $produit * $nb;
}
echo $produit;
```

## Explications supplémentaires

**Est-ce que je peux stocker plusieurs fois la même valeur dans un tableau ?**

Oui, c'est tout à fait possible. Seules les clés doivent être uniques.

**Est-ce qu'on peut supprimer un couple clé/valeur d'un tableau ?**

Oui, c'est possible, en utilisant la fonction `unset()`. Si j'ai un tableau stocké dans une variable `$populations` et que je veux
supprimer la ligne dont la clé est `'France'`, il suffit de faire `unset($populations['France']);`. Cette fonction peut également 
servir à supprimer une variable, bien qu'on le fasse que très rarement.

Attention, dans les tableaux où les valeurs sont numérotées par de clé de type entier, si vous supprimez la valeur reliée à la clé 3 dans un 
tableau de 5 éléments, il ne restera plus que 4 éléments numérotés 0, 1, 2, 4. Les numéros ne se suiveront plus.