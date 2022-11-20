# Les opérateurs

## Les opérateurs mathématiques

Toute la puissance des ordinateurs vient du fait qu'ils peuvent faire des calculs très très rapidement et sans se tromper. On peut 
effectuer toutes sortes de calculs dans nos programmes.

Il y a bien sûr, les calculs arithmétiques tels que l'addition `+`, la soustraction `-`, la multiplication `*` ou la division `/`. Il est également possible de calculer le reste de la division entière grâce au modulo `%`, et de calculer des puissances grâce à l'opérateur d'exponentiation `**`.

Lorsque plusieurs opérateurs sont utilisés, l'opérateur ayant la plus forte priorité sera calculée en premier, comme en mathématiques. Par exemple, l'opérateur de multiplication à une plus forte priorité que l'addition ou la soustraction, il sera donc évalué en premier.

Essaie de trouver ce qui sera affiché par ce programme, puis vérifie tes calculs en appuyant sur "Run".

``` php runnable
<?php
echo '2 + 3 = ', 2 + 3, "\n";
echo '4 + 5 * 2 = ', 4 + 5 * 2, "\n";
echo '15 % 4 = ', 15 % 4, "\n";
echo '3 * 4 / 3 – 2 + 1 = ', 3 * 4 / 3 – 2 + 1, "\n";
echo '3 * 2 ** 5 = ', 3 * 2 ** 5, "\n";
```

## Les opérateurs de comparaison

Ce sont les opérateurs qui permettent de determiner si un élément est égal ou non à un autre, ou à déterminer si un élément est supérieur, inférieur,...
à un autre. Tous ces opérateurs renvoie une valeur booléenne, c'est-à-dire, soit true, soit false.

En PHP, il faut faire attention au cas de l'égalité. En effet, nous utilisons déjà l'opérateur `=` pour affecter une valeur à une variable. Nous utiliserons 
donc deux autres opérateurs qui sont `==` et `===`. La différence entre ces deux opérateurs vient de la gestion des types des valeurs lors de la comparaison.

Par exemple, 1 et '1' valent tous les deux 1, mais le premier est un entier, tandis que le second est une chaîne de caractères. 
`1 == '1'` vaut true, tandis que `1 === '1'` vaut false. Dans le dernier cas, 1 et '1' sont considérées comme différents car ils n'ont pas le même type.

Il existe la même différence pour l'inégalité : `!=` et `!==`.

Pour écrire supérieur ou égal, et inférieur ou égal, on ajoutera le symbole = après le supérieur ou l'inférieur, soit `>=` et `<=` respectivement.

## Les opérateurs logiques

Il est également possible de faire des calculs logiques grâce aux opérateurs ET `&&`, OU `||`, et NON `!`. Ces opérateurs sont des opérateurs booléennes est 
renvoie donc toujours true ou false comme valeur.

### L'opérateur ET

L'opérateur ET `&&` renverra la valeur true si ses deux opérandes ont pour valeur true. On résume cela dans une table de vérité.

| && || true | false |
|-------||-------|-------|
| true || true | false |
| false || false | false |