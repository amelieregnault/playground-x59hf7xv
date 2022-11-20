# Les structures de contrôle conditionnelles

Pour l'instant nos programmes suivent une "ligne droite", leur exécution commence à la première ligne, puis continue ligne après ligne dans l'ordre. Les structures de contrôles sont là pour indiquer au programme dans quel ordre exécuter les instructions. La structure de contrôle que nous avons utilisée
jusqu'à présent est la structure de contrôle séquentielle.

Nous allons découvrir deux autres types de structures de contrôles
- les structures de contrôle conditionnelles
- les structures de contrôle itératives

Commençons par les structures de contrôle conditionnelles.

Comme dans la vraie vie, nos programmes devront parfois faire des choix en fonction des données qui lui sont fournies. Les structures de contrôle conditionnelles sont là pour lui permettre de choisir entre différents blocs de code.

### structure IF à un bloc

Admettons que nous voulions afficher le contenu d'une variable `$message` seulement si celle-ci n'est pas vide. Pour cela, on peut écrire le code suivant : 

```php runnable
<?php
$message = "";
if (!empty($message)) {
    echo $message, "\n";
}
echo "Fin du programme.";
```

1. Exécute une première fois le code ci-dessus, que s'affiche-t-il ? 
2. Modifie la variable $message en y inscrivant un message. Relance le programme, que s'affiche-t-il maintenant ?

La syntaxe de cette structure de contrôle est la suivante : 
```
if (cond) {
    code
} 
```
où `cond` est une expression boolénne et `code` une ou plusieurs lignes de code qui ne seront éxécutées que si `cond` a pour valeur true. 

Dans notre exemple, lorsque `$message` est vide, `empty($message)` vaut true, et sa négation `!empty($message)` vaut false, 
donc le code `echo $message, "\n";` n'est pas exécuté. En revanche, lorsque l'on met un texte dans la variable `$message`, la condition `!empty($message)`
devient true et le message est affiché.

### Structure IF à deux blocs

Prenons comme exemple un programme qui doit afficher "fermé" si la variable `$jour` correspond à un jour du week-end, et ouvert sinon. On peut écrire 
le code suivant : 

```php runnable
<?php
$jour = 'dimanche';
if ($jour === 'samedi' || $jour === 'dimanche') {
    echo 'Fermé';
} else {
    echo 'Ouvert';
}
```

1. Exécute une première fois le code ci-dessus, que s'affiche-t-il ? 
2. Modifie la variable $jour avec la valeur "mardi". Relance le programme, que s'affiche-t-il maintenant ?

La syntaxe de cette structure de contrôle est :

```
if (cond) {
    code 1
} else {
    code 2
}
```

où `cond` est une expression booléenne, `code 1` correspond à une ou plusieurs lignes de code qui s'exécuteront si `cond` a pour valeur true et `code 2` correspond à une ou plusieurs lignes de code qui s'exécuteront si `cond` a pour valeur false.

Dans notre exemple, au début, la variable `$jour` vaut "dimanche", donc l'expression `$jour === 'samedi' || jour === 'dimanche'` a pour valeur true. Le code du premier bloc est donc exécuté et "Fermé" est affiché. Si la variable `$jour` a maintenant pour valeur "mardi", alors l'expression `$jour === 'samedi' || jour === 'dimanche'` vaut false, et c'est le deuxième bloc de code qui est exécuté et "Ouvert" est affiché.

### Structure IF à trois blocs ou plus

Prenons l'exemple d'un programme qui affiche "Bonjour" dans la langue indiquée par l'utilisateur (ici, on utilisera une variable). Nous pourrions avoir le programme suivant : 

```php runnable
<?php
$langue = 'allemand';
if ($langue === 'espagnol') {
    echo 'Buenas dias';
} else if ($langue === 'allemand') {
    echo 'Guten Tag';
} else if ($langue === 'italien') {
    echo 'Buongiorno';
} else {
    echo 'hello';
}
```

1. Exécute une première fois le code ci-dessus, que s'affiche-t-il ? 
2. Modifie la variable $langue avec la valeur "italien" ou "espagnol". Relance le programme, que s'affiche-t-il maintenant ?
3. Essaie d'ajouter un nouveau bloc pour afficher "Bonjour" si la variable `$langue` vaut "Français".

Pour cette structure de contrôle, la syntaxe est la suivante : 

```
if (cond 1) {
    code 1
} else if (cond 2) {
    code 2
} else {
    code 3
}
```

Les conditions sont analysées dans l'ordre. Si l'expression `cond 1` vaut true, alors `code 1` est exécuté, sinon l'expression `cond 2` est évalué. Si cette dernière vaut true, alors `code 2` sera exécuté. Le `code 3` ne sera exécuté que si aucune des conditions ne vaut true.

Dans tous les cas, un seul des blocs peut être exécuté : celui correspond à la première condition évaluée à true.

Dans le code suivant, plusieurs conditions peuvent être vraies en même temps. Tu peux hanger les valeurs de la variable `$n` pour voir ce qu'il se passe dans les différents cas de figures.

``` php runnable
<?php
$n = 100;
if ($n >= 1000) {
    echo "milliers ou plus";
} else if ($n >= 100) {
    echo "centaines";
} else if ($n >= 10) {
    echo "dizaines";
} else if ($n >= 0) {
    echo "unités";
}
```

## Explications supplémentaires

**Est-ce que je peux mettre une structure IF dans un bloc correspondant au `else` ?**

Oui, c'est tout à fait possible. On peut aussi mettre une structure IF dans un bloc correspondant au `if`. 
De manière générale, il est toujours possible d'imbriquer les structures de contrôle dans une autre, qu'elles soient du même "type" ou non. 

**Existe-t-il d'autres structures de contrôle itératives ?**

Oui, il existe, par exemple la structure SWITCH ([documentation](https://www.php.net/manual/fr/control-structures.switch.php)). Mais, tout ce que l'on peut faire avec cette structure, on peut le faire avec une structure IF ; l'inverse n'étant pas forcément possible.
