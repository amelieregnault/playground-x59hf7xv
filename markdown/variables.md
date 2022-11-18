# Premiers Programmes - Les variables

Nous avons vu comment afficher du texte à l'utilisateur, mais ce texte
est fixe et ne peut pas varier d'une exécution à une autre du programme.
Par exemple, il pourrait être intéressant de dire "Bonjour Pierre" si c'est Pierre l'utilisateur et "Bonjour Hélène" si c'est Hélène qui lance le programme.

Essayons de programmer cela, mais avant cela réfléchissons. 

Pour arriver à ce résultat, il nous faut d'abord connaître le prénom de l'utilisateur, et le meilleur moyen de le savoir est que le programme lui demande et de le stocker quelque part afin de l'avoir à disposition pour l'utiliser ailleurs dans le programme.

Détaillons toutes ces étapes : 

1/ Nous allons utiliser la commande `echo` pour lui demander son prénom. 2/ Ensuite, nous utiliserons la fonction `lireLigne()`, qui simulera l'action d'un utilisateur saisissant son prénom grâce à son clavier.
3/ Nous utiliserons une variable `$prenom` pour stocker la valeur obtenue à l'étape 2. Pour cela, on utilisera l'opérateur d'affectation `=` qui veut dire "prend la valeur de".
4/ Nous afficherons le résultat grâce à la commande `echo`. Il est possible d'afficher plusieurs éléments avec le même `echo` en les séparant par une virgule `,`.

Voici le programme que l'on obtient : 
```
<?php
echo "Comment t'appelles-tu ? ";
$prenom = lireLigne();
echo "Bonjour ", $prenom;
```

Reproduis le programme ci-dessus.

@[A toi d'essayer !]({"stubs": ["bonjourPrenom.php"], "command": "/bin/bash run.sh"})