# Les structures de contrôle conditionnelles - Exercices

## Exercice 1 : Structrue de contrôle IF

Voici un programme, étudie-le et indique ce qui sera affiché sur la console.

```
<?php
$note1 = 8;
$note2 = 10;
if ((note1 + note2) / 2 >= 10) {
    echo "Vous avez la moyenne. Bravo !";
} else {
    echo "Vous n'avez pas la moyenne. Dommage !";
}

```

?[Qu'affiche le programme]
- [] Vous avez la moyenne. Bravo !
- [X] Vous n'avez pas la moyenne. Dommage !
- [] Vous avez la moyenne. Bravo ! Vous n'avez pas la moyenne. Dommage !
- [] Vous n'avez pas la moyenne. Dommage ! Vous avez la moyenne. Bravo !

## Exercice 2 : Maximum

Ecrire un programme qui affiche le maximum entre deux nombres `n1` et `n2`.

@[Ta solution]({"stubs": ["maximum.php"], "project":"maximum", "command": "/bin/bash run.sh"})

## Exercice 3 : 

Ecrire un programme qui effectue un calcul entre deux nombres `n1` et `n2` à l'aide
d'un opérateur `op` qui peut être celui de l'addition, de la soustraction ou de la multiplication.

## Exercice 4 : Années Bissextiles

Voici un programme qui détermine si une année est bissextile. 
À cause des nombreuses imbrications de structures conditionnelles et des répétitions, ce code n’est pas facile à lire. 

Seras-tu capable de le simplifier ?


