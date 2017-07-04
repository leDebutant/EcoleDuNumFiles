<?php
/**
 * Les regex permettent re repérer des expressions ou caractères qui sont logés dans un bloque de texte.
 *  Exemple: "Le password est 1945"; avec les regex
 *  nous pourrons rechercher ce code 1945.
 *  Ceci permet non seulement des recherches mais de vérifier
 *  aussi la syntaxe de différents inputs
 *
 * Plusieurs fonctions utilisent les regex comme paramètre
 * preg_match,preg_replace, preg_filter sont quelques unes
 * d'entre elles
 */

 /*
 * 1) les quantificateurs sont présenté avec des accolades
 * comme suit {1,3} veut dire un minimum deux ou trois maxi
 */
// if (preg_match("#Vladimir{1,3}#", "Vladimir Kramnik")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;

 /*
 * 1bis) Les regex peuvent être présenté entre # ou entre /
 * /vladimir/ et #vladimir# sont la même chose
 * l'option i après le hashtag nous permet d'ignorer Les
 * différences majuscules minuscules   "#vladimir#i"
 */
// if (preg_match("#vladimir#", "Vladimir Kramnik")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;

/*
* 2) le point "." est un joker qui remplacera tout autre
* caractère
*/
// if (preg_match("#V.adim.r#", "Vladimir Kramnik")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;


/*
* 3) l'astérisque "*" est un quantificateur qui combiné
* au point nous permettra par exemple de matcher par exemple
* un début
* mais indépendamment de la fin. Donc ".*"
*/
// if (preg_match("#Vla.*Kramnik#", "Vladimir Kramnik")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;

/*
* 4) le plus "+" est un quantificateur qui indique la présence
* d'au moins un caractère ou groupe de caractère en référence
* -> Au moins un ou plus {1,}
*/
// if (preg_match("#Vladimir .+Kramnik#", "Vladimir Kramnik")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;

/*
* 5) le plus "?" est un quantificateur qui indique la présence
* de zéro ou un caractère max
* -> {0,1}
*/
// if (preg_match("#Vladimir.?ramnik#", "Vladimir Kramnik")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;


/*
* 6) Pour matcher les metacaractères que nous avons vu
* (#,?,.,*) il va falloir les échapper par exemple: "\."
*/
// if (preg_match("#Vladimir\. Kramnik#", "Vladimir. Kramnik")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;
