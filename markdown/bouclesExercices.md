# Les structures de contrôle itératives - Exercices

## Exercice 1 : Structrue de contrôle WHILE

Voici un algorithme, étudiez-le et réponds au question ci-dessous.

```
<?php
$n = lireLigne(); 
$k = 1;
while ($k*$k < $n) {
    k = k + 1;
}
echo $k;
```

?[Qu'affiche le programme si n vaut 5 ?]
- [] 1
- [] 2
- [X] 3
- [] 5

?[Que fait ce programme ?]
- [] Rien.
- [X] Il calcule le plus petit entier k tel que son carré est supérieur à n.
- [] Il calcule le plus grand entier k tel que son carré soit inférieur à n.
- [] Il boucle à l'infini.

## Exercice 2 : Plus petit entier

Écris un programme qui affiche le plus petit entier n tel que (n+1)(n+3) dépasse 12345. 
Pour cela utiliser une structure de contrôle itérative.

## Exercice 3 : Somme d’entiers

Écris un programme qui lit des entiers grâce à la fonction `lireLigne()` jusqu'à l'apparition d'un zéro et qui en fait la somme, puis qui affiche le résultat.

## Exercice 4 : Table de multiplication

Écris un programme qui lit un entier entre 1 et 10 à l'aide de la fonction `lireLigne()` et qui affiche la table de multiplication de ce nombre.