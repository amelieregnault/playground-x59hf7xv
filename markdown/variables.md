# Premiers Programmes - Les variables

Nous avons vu comment afficher du texte à l'utilisateur, mais ce texte
est fixe et ne peut pas varier d'une exécution à une autre du programme.
Par exemple, il pourrait être intéressant de dire "Bonjour Pierre" si c'est Pierre l'utilisateur et "Bonjour Hélène" si c'est Hélène qui lance le programme.

Essayons de programmer cela, mais avant cela réfléchissons. 

Pour arriver à ce résultat, il nous faut d'abord connaître le prénom de l'utilisateur, et le meilleur moyen de le savoir est que le programme lui demande et de le stocker quelque part afin de l'avoir à disposition pour l'utiliser ailleurs dans le programme.

Détaillons toutes ces étapes : 

1. Nous allons utiliser la commande `echo` pour lui demander son prénom. 
2. Ensuite, nous utiliserons la fonction `lireLigne()`, qui simulera l'action d'un utilisateur saisissant son prénom grâce à son clavier.
3. Nous utiliserons une variable `$prenom` pour stocker la valeur obtenue à l'étape 2. Pour cela, on utilisera l'opérateur d'affectation `=` qui veut dire "prend la valeur de".
4. Nous afficherons le résultat grâce à la commande `echo`. Il est possible d'afficher plusieurs éléments avec le même `echo` en les séparant par une virgule `,`.

Voici le programme que l'on obtient : 
```
<?php
echo "Comment t'appelles-tu ? ";
$prenom = lireLigne();
echo "Bonjour ", $prenom;
```

Reproduis le programme ci-dessus.

@[A toi d'essayer !]({"stubs": ["bonjourPrenom.php"], "project":"bonjourPrenom", "command": "/bin/bash run.sh"})


## Explications supplémentaires

**C'est quoi une variable ?**

Une variable est un emplacement dans la mémoire de l'ordinateur (ou tout autre appareil pouvant éxécuter un programme) dans lequel on pourra y inscrire une valeur.
Pour pouvoir ensuite accéder au contenu de cette variable, il faut lui donner un nom. 
Dans notre exemple, on a voulu inscrire un prénom en mémoire et on a donc créé un variable, que l'on a, naturellement, appelé `$prenom`. 
Lorsque l'on donne une valeur à une variable, on dit qu'on "affecte une valeur" et pour le faire, on utilise l'opérateur d'affectation `=`.

**Je peux utiliser n'importe quel nom de variable ?**

Non, il faut respecter quelques règles. En PHP, tous les noms de variables doivent commencer par un dollar `$` puis être suivi d'une lettre ou d'un underscore `_`. 
Ensuite, on peut utiliser des lettres, des nombres ou des underscores.

*Attention : il ne faut pas mettre d'espace dans un nom de variable*. 

En PHP, par convention, on écrit les noms de variables en *camelCase*, c'est-à-dire en minuscules, sans accent, et on met en majuscule la première lettre des mots pour les rendre lisible. 
Par exemple, si je veux créer une variable pour stocker l'âge du capitaine, je pourrais nommer cette variable `$ageCapitaine`.

**Je peux affecter n'importe quelle valeur à une variable ?**

Il existe plusieurs types de valeurs en PHP. Les principales sont : 
* Les entiers (int) qui correspondent aux nombres entiers positifs ou négatifs
Ex : `$num = -5;`
* Les flottants (float) qui permettent de représenter les nombres à virgule
Ex : `$taille = 1.75;`
* Les chaînes de caractères (string) qui permettent de stocker du texte : 
Ex : `$phrase = 'Les chaussettes de l'archiduchesse sont-elles sèches';`
* Les booléens (bool) qui ne peuvent prendre que deux valeurs : true ou false (vrai ou faux).
Ex : `$estContent = true;`

On peut affecter une valeur à une variable en :
* indiquant directement la valeur comme ci-dessus,
* utilisant une autre variable, la valeur sera alors le contenu de cette variable au moment de l'éxécution,
* en faisant des calculs, comme nous le verrons au prochain chapitre,
* en utilisant le résultat d'une fonction, comme nous avons fait avec la fonction `lireLigne()`.

**Que se passe-t-il si j'affecte une valeur à une variable qui a déjà une valeur ?**

La première valeur sera écrasée par la nouvelle. 

```php runnable
<?php
$age = 10;
echo "J'ai ", $age, " ans.\n";
$age = 11;
echo "J'ai ", $age, " ans.\n";

 ```

 *NB : `\n` est la caractère pour faire un saut de ligne. Il doit être placé dans une chaîne de caractères entourée de guillemets `"`.* 