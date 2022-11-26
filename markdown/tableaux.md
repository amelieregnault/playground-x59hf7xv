# Les tableaux

Nous avons vu qu'il était possible de stocker la valeur d'une expression dans une variable. Mais comment faire si nous avons 
beaucoup de valeurs à stocker, comme par exemple, pour stocker l'ensemble des notes au contrôle d'informatique. En fonction de
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
print_r(
    [
        'Paris',
        'Nantes',
        'Strasbourg',
        'Nice',
        'Bordeaux',
    ]
);

```

Il est également possible de mettre le code sur une seule ligne, lorsque celle-ci n'est pas trop longue : 
```
print_r(['Paris', 'Nantes', 'Strasbourg', 'Nice', 'Bordeaux']);
```

## Explications supplémentaires

**Est-ce que je peux stocker plusieurs fois la même valeur dans un tableau ?**

Oui, c'est tout à fait possible. Seules les clés doivent être uniques.