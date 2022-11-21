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

## La structure de conrtrôle While

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
de manière équivalente. Cette structure a la syntaxe suivante.

```
for ($compteur = 0; $compteur < nombre; $compteur = $compteur + 1){
    code
}
```

NB : A la place de `compteur = compteur + 1`, on peut utiliser `$compteur++` qui est équivalent.

Essayer de refaire le code qui affiche un carré d'astéristique de taille 5, mais **en utilisant un for**.



Essayer de refaire le code qui affiche les nombres pairs de 2 à 10, mais **en utilisant un for**.