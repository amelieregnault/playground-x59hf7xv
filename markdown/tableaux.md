# Les tableaux

Nous avons vu qu'il était possible de stocker la valeur d'une expression dans une variable. Mais comment faire si nous avons 
beaucoup de valeurs à stocker, comme par exemple, pour stocker l'ensemble des notes au contrôle d'informatique. En fonction de
la taille de la classe, cela peut facilement représenter 25 notes, voire plus. Cela ne va pas être gérable de créer et d'utiliser
une variable pour chacune de ces notes.

Pour répondre à cette problèmatique, nous pouvons utiliser des tableaux. Les tableaux sont des structures de données qui permettent de 
stocker des données les unes à la suite des autres. En PHP, on pourra retrouver une valeur dans le tableau grâce à sa clé. Chaque clé doit
bien entendu être unique pour un même tableau.

En PHP, les clés peuvent être de deux types différents, soit numériques, soit des chaînes de caractères. Voici deux exemples de tableaux
le premier utilisant des clés numériques et le second des chaînes de caractères. 

**Exemple 1 : calendrier d'anniversaire du mois de juin** 
``` php runnable
<?php
print_r(
   [
      3 => "Julie",
      10.5 => "Marc",
      25 => "Charles",
   ]
);
```

**Exemple 2 : Le tableau de notes d'un étudiant**
``` php runnable
<?php
print_r(
    [
        "Français" => 10,
        "Mathématiques" => 15,
        "Historire-géo" => 11,
        "Anglais" => 16,
    ]
);
```

*NB : La fonction `print_r` permet d'afficher un tableau et de visualiser ainsi les clés et les valeurs qu'il contient.*

## Création d'un tableau

Voyons d'un peu plus près la syntaxe permettant de créer un tableau. Pour créer un tableau, il existe deux deux syntaxes équivalentes qui sont 
la fonction `array()` et son raccourci `[]`. Si l'on ne précise rien de plus, on obtiendra un tableau vide.

Si l'on souhaite y mettre des valeurs dès la création du tableau, on pourra indiquer une liste de clés et d'expression, en utilisant la syntaxe suivante 
`cle => expression`, séparée par des virgules. La clé peut être un nombre ou une chaîne de caractères. L'expression sera évaluée et seule sa valeur sera stockée dans le tableau.

La syntaxe pour créer un nouveau tableau est donc la suivante :
```
[
    clé1 =>
]
```

NB : Un tableau est une expression et peut donc être stocké dans une valeurs, utilisé dans une expression arithmétiques ou logiques, passé en paramètre 
d'une fonction, et même stocké comme valeur dans un tableau.