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
      10 => "Marc",
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