# Les structures de contrôle itératives

Il va souvent arriver que vous vouliez faire faire la même action (ou presque la même), plusieurs à un programme. Une possibilité est d'écrire plusieurs
fois la même instruction. Une autre possibité est d'utiliser une structure de contrôle qui va refaire une même instruction autant de fois que nécessaire.

Regardons cela avec un exemple. Si je souhaite dessiner un carré d'astérisque de côté 5, je peux écrire le code suivant : 

``` php runnable
<?php
echo '* * * * *', "\n";
echo '* * * * *', "\n";
echo '* * * * *', "\n";
echo '* * * * *', "\n";
echo '* * * * *', "\n";
```

C'est faisable, ça fonctionne, mais si j'avais voulu faire un carré de taille 100, ce serait déjà beaucoup plus pénible pour moi et un carré de côté 1000,
cela devient quasiment impossible.

Utilisons plutôt une structure de contrôle itérative : 

``` php runnable
<?php
$compteur = 0;
while ($compteur < 5) {
    echo '* * * * *', "\n";
    $compteur = $compteur + 1;
}
```

1. Exécute les deux codes ci-dessus. A-t-on le même résultat ?
2. Modifie le deuxième code en remplaçant 5 par 10. Que se passe-t-il ?
3. Ajoute l'instruction `echo "Fin";` à la ligne 7 et observe ce qui se passe.

## La structure de contrôle While

La syntaxe de cette structure de contrôle est : 

```
while (cond) {
    code
}
```

Cette structure de contrôle va nous permettre de répéter le bloc `code` tant que la condition que la condition `cond` vaut true. La condition `cond` peut être n'importe quelle expression booléenne. Lorsque la condition `cond` devient false, le block `code` n'est plus répété et le code qui suit le bloc est exécuté.

*Il faut faire attention à ce que la condition `cond` devienne false à un moment donné, sinon le programme va partir dans une boucle infinie.*

Dans notre exemple, 
1. au début, la condition `$compteur < 5` vaut true, puisque `$compteur` vaut 0. On exécute donc une première fois le bloc composé des lignes 4 et 5 : on affiche alors une ligne de 5 étoiles, puis `$compteur` est incrémenté de 1 et vaut maintenant 1. 
2. On revérifie la condition `$compteur < 5` qui vaut encore true puisque `compteur` vaut 1. On exécute donc une nouvelle fois le bloc des lignes 4 et 5. 
On affiche une ligne de 5 étoiles, puis on incrémente `$compteur`.
3. On revérifie la condition `$compteur < 5` qui vaut true et on exécute à nouveau le même bloc...

A force d'incrémenter la variable `compteur`, celle-ci va finir par prendre la valeur 6, et la condition `$compteur < 5` vaudra alors false, on arrête d'éxécuter le bloc des lignes 4 et 5. Ici, il n'y a plus de code après ce bloc, donc le programme s'arrête.
 
Regardons un autre exemple. On va essayer d'afficher la liste des nombres pairs de 2 à 10. Ici, aussi on va utiliser la structure de contrôle `while`.

``` php runnable
<?php
$nombre = 2;
while ($nombre <= 10){
    echo $nombre, "\n";
    $nombre = $nombre + 2;
}
```

## La structure de contrôle for

Il arrivera souvent que l'on utilise les structures itératives pour répéter un bloc d'instructions un certain nombres de fois, comme nous venons de le 
faire dans les exemples ci-dessus, et notre code aura la forme suivante : 

```
$compteur = 0
while ($compteur < nombre) {
    code
    $compteur = $compteur + 1;
}
```

où `nombre` sera le nombre de répétitions du bloc, et `code` le code à exécuter. La structure de contrôle for, qui est plus compacte, peut alors être utilisée
de manière équivalente : 

```
for ($compteur = 0; $compteur < nombre ; $compteur = $compteur + 1){
    code
}
```

NB : A la place de `$compteur = $compteur + 1`, on peut utiliser `$compteur++` qui est équivalent.

De  manière générale, la syntaxe de la structure de contrôle for est : 

```
for (initialisation; condition ; modification){
    code
}
```

où `initialisation` correspond à donner une première valeur à une variable, la `condition` qui va tester cette variable par rapport à certains critères, et la 
`modification` qui va modifier la valeur de cette même variable afin que la valeur de `condition` deviennent false à un moment donné.

- Essayer de refaire le code qui affiche un carré d'astéristique de taille 5, mais **en utilisant un for**.

@[A toi d'essayer]({"stubs": ["for1.php"], "project":"for", "command": "/bin/bash run1.sh"})

- Essayer de refaire le code qui affiche les nombres pairs de 2 à 10, mais **en utilisant un for**.

@[A toi d'essayer]({"stubs": ["for2.php"], "project":"for", "command": "/bin/bash run2.sh"})

## La structure de contrôle do-while

Dans certains cas, on souhaitera faire un premier tour de boucle avant de tester la condition pour savoir si on continue. Dans ce cas, on peut utiliser la 
structure de contrôle do-while, dont voici la syntaxe :

```
<?php
do {
  code
} while (cond);
```

On exécute donc une première fois le bloc de code, puis on vérifie la condition `cond`. Si elle vaut true, alors on repart dans le bloc de code, sinon on continue le reste du programme.

Voici un exemple:

``` php runnable
<?php
do {
    echo "Tu aimes bien la programmation ? ";
    $i = rand(1,2);
    if ($i === 1) {
        $answer = "Non";
    } else {
        $answer = "Oui";
    }
    echo $answer, "\n";
} while ($answer === "Non");
echo "Ah! enfin !\n";
```
Dans cette exemple, on est sûr de poser au moins une fois la question "Tu aimes la programmation ?".


## Explications supplémentaires

**Existe-t-il d'autres structures de contrôles itératives ?**

Oui, nous verrons la structure de contrôle foreach dans le prochain chapitre sur les tableaux.

**Est-ce que je peux mettre une structure itérative dans le bloc de code d'une autre structure itérative ?**

Oui, c'est tout à fait possible, et on le fait assez régulièrement quand on code. La structure qui est la plus à l'intérieur sera alors exécuté plusieurs fois.
Admettons, qu'on ait un for qui répète son code 2 fois et qu'à l'intérieur de son code il y ait un autre for qui lui répète son code 3 fois. Alors le code du deuxième for sera répété en tout 6 fois.

``` php runnable
<?php
for ($i = 0; $i < 2; $i++) {
    echo "je suis dans le premier for \n";
    for ($j = 0; $j <3; $j++) {
        echo "je suis dans le deuxième for \n";
    }
}
```

N'hésite pas à changer les conditions des deux for (pour exemple en mettant `$i < 3` et `$j < 2`) et voir le résultat que s'affichera.

