# Premiers Programmes - Hello World

Le programme "Hello World !" est le premier programme que l'on écrit quand on essaie un nouveau programme. 
Il permet de vérifier que notre installation est correcte, et que l'on va pouvoir coder sereinement.

Ce programme est très simple et consiste à afficher le texte "Hello World !" à l'utilisateur.

Pour réaliser ce programme en PHP, il nous faudra écrire dans un fichier
* premièrement, la balise ouvrante `<?php` pour indiquer que nous allons écrire du code PHP ;
* deuxièmement, afficher notre phrase à l'aide de la commande `echo`.

Attention, toutes les instructions PHP doivent se terminer par un `;`.

Le programme va alors être le suivant : 
```
<?php
echo 'Hello World !';
```

Recopie correctement ce programme dans l'éditeur ci-dessous  **sans faire de copier-coller** et essaie de l'exécuter.

@[A toi d'essayer !]({"stubs": ["helloWorld.php"], "command": "/bin/bash run.sh"})

## Explications supplémentaires

1. Pourquoi faut-il écrire `<?php` au début du programme ?

PHP est un langage destiné à la production de page web. Il est donc 
souvent utilisé en association avec du code HTML. La balise ouvrante 
`<?php` et la balise fermante `?>` vont permettre de séparer le code PHP
du code HTML.

2. Alors, pourquoi nous n'avons pas utilisé la balise fermante `?>` dans
le programme Hello World ?

Lorsqu'il n'y a que du code PHP dans un fichier, il est préférable de
ne pas mettre la balise fermante. Dans le cadre de la programmation web,
cela peut poser un problème lors de l'inclusion de ce type de fichier dans un fichier contenant du HTML.

3. Pourquoi avons-nous mis des quotes `'` autour du texte `Hello World !` ?

Les textes comme `Hello World !` s'appellent en programmation des chaînes
de caractères. Pour les différencier du texte composant le programme, comme par exemple `echo` ou `;`, on les entoure de quotes `'` en PHP. Nous verrons plus tard, que nous pourrons aussi les entourer de guillemets `"`.