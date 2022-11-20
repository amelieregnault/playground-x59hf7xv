# Les opérateurs

## Les opérateurs mathématiques

Toute la puissance des ordinateurs vient du fait qu'ils peuvent faire des calculs très très rapidement et sans se tromper. On peut 
effectuer toutes sortes de calculs dans nos programmes.

Il y a bien sûr, les calculs arithmétiques tels que l'addition `+`, la soustraction `-`, la multiplication `*` ou la division `/`. Il est également possible de calculer le reste de la division entière grâce au modulo `%`, et de calculer des puissances grâce à l'opérateur d'exponentiation `**`.

Lorsque plusieurs opérateurs sont utilisés, l'opérateur ayant la plus forte priorité sera calculée en premier, comme en mathématiques. Par exemple, l'opérateur de multiplication à une plus forte priorité que l'addition ou la soustraction, il sera donc évalué en premier. On peut forcer l'évaluation d'un 
calcul avant les autres en utilisant des parenthèses, toujours comme en mathématiques.

**Essaie de trouver ce qui sera affiché par ce programme, puis vérifie tes calculs en appuyant sur "Run".**

``` php runnable
<?php
echo '2 + 3 = ', 2 + 3, "\n";
echo '4 + 5 * 2 = ', 4 + 5 * 2, "\n";
echo '15 % 4 = ', 15 % 4, "\n";
echo '3 * 4 / 3 - 2 + 1 = ', 3 * 4 / 3 - 2 + 1, "\n";
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

Les opérateurs de comparaison ont une plus faible priorité que les opérateurs mathématiques.

## Les opérateurs logiques

Il est également possible de faire des calculs logiques grâce aux opérateurs ET `&&`, OU `||`, et NON `!`. Ces opérateurs sont des opérateurs booléennes est 
renvoie donc toujours true ou false comme valeur.

### L'opérateur ET

L'opérateur ET `&&` renverra la valeur true si ses deux opérandes ont pour valeur true. On résume cela dans une table de vérité.

| `&&` | true | false |
|-------|-------|-------|
| true | true | false |
| false | false | false |

### L'opérateur OU

L'opérateur OU `||` renverra la valeur true si au moins une de ses opérandes vaut true, ce qui donne la table de vérité suivante :

| `||` | true | false |
|-------|-------|-------|
| true | true | true |
| false | true | false |

### L'opérateur NON

L'opérateur NON `!` inverse la valeur de son unique opérande, d'où la table de vérité: 

| `!` | true | false |
|-------|-------|-------|
|  | false | true |

De la même manière que pour les autres opérateurs, il existe des priorité de calculs. Ainsi l'opérateur NON `!` a la plus forte priorité, puis l'opérateur ET
`&&` et enfin l'opérateur OU `||` qui a la plus faible priorité. Les opérateurs ET `&&` et OU `||` ont une plus faible priorité que les opérateurs arithmétiques et les opérateurs de comparaisons.

**Essaie de trouver ce qui sera affiché par ce programme, puis vérifie tes calculs en appuyant sur "Run".**

``` php runnable
<?php
echo '5 >= 6 vaut ', 5 >= 6, "\n";
echo "'1' == 1 vaut ", '1' == 1	, "\n";
echo "'1' === 1 vaut ", '1' === 1, "\n";
echo '5 != 6 + 4 - 9 vaut ', 5 != 6 + 4 - 9	, "\n";
echo '5 > 6 === 5 > 9 vaut ', 5 > 6 === 5 > 9, "\n";
echo 'true || false && (2 > 1) vaut ', true || false && (2 > 1), "\n";
echo '(2 === 4 || (4 < 1)) && (19 >= 17 + 2) vaut ', (2 === 4 || (4 < 1)) && (19 >= 17 + 2), "\n";

echo '==============';

$x = 3;
$y = 6;
$z = 5;

echo '$z != 0 && (2 * ($x - $y) < 3) vaut ', $z != 0 && (2 * ($x - $y) < 3), "\n";
echo '((($x * $y > 0) && !($y * $z > 0)) || ($x >= 0)) vaut ', ((($x * $y > 0) && !($y * $z > 0)) || ($x >= 0)), "\n";

```

## Les autres opérateurs

Il existe d'autres opérateurs, tels que l'opérateur de concaténation `.` qui permet de joindre deux chaînes de caractères en une seule chaîne de caractères.

La liste de l'ensemble des opérateurs, ainsi que leur priorité, est disponible dans la documentation PHP : [PHP.NET : les opérateurs](https://www.php.net/manual/fr/language.operators.precedence.php)

## Explications supplémentaires

**C'est quoi exactement l'opérateur modulo ? Je n'ai pas bien compris**

Lorsqu'on fait une division entière (ou euclidienne), on ne calcule qu'avec des nombres entiers, et donc certaines divisions "ne tombent pas justes", et il y a donc un reste. L'opérateur modulo ``%` calcule ce reste. Par exemple, 13 % 4 = 1, car le résultat de la division entière de 13 par 4 (son quotient) est 3, mais il reste 1 : 13 = 3 * 4 + 1.

Une utilisation courante de l'opérateur modulo "%" en informatique est de déterminer si un nombre est divisible par un autre. En effet, si un nombre a est divisible par un nombre b, lorsqu'on divise a par b, il n'y a pas de reste, et donc le modulo correspondant vaut 0.

**Lorsque j'utilise des opérateurs, je peux juste les afficher ?**

Bien sûr que non, on peut les utiliser de différentes façons. Lorsqu'on utilise des opérateurs, on fabrique une expression et cette expression une fois évaluée correspond à une valeur. Comme toute valeur, on peut 
- la stocker dans une variables
- l'utiliser dans un calcul
- l'afficher
On verra, plus tard, qu'on peut également
- l'utiliser comme condition dans les structures de contrôles (surtout les expressions booléennes)
- la stocker dans un tableau
- la passer en paramètre d'une fonction
