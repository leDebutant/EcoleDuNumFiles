<?php

/**
* 1) On peut grouper des caractères avec les paranthèses
* Il représentera un groupe auquel on peut appliquer un
* quantificateur que nous avons vu dans le fichier précédent
*/

// if (preg_match("#1(,000)+#", "1,000,000,000,000")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;

/**
* 2) La close "ou" contrairement aux langages de programmation
* usuels celle-ci sera composée par un seul caractère | "pipe"
*/
// if (preg_match("#Alfonso|Pierre|Serge#", "Alfonso sera présent")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;

/**
* 3) Pour vérifier qu'un block de caractères commence
* Par la chaine qu'on vise on utilisera le "^" accent
* circonflexe
*/
// if (preg_match("#^Alfonso#", "Alfonso sera présent")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;

/**
* 4) Pour vérifier qu'un block de caractères fini
* Par la chaine qu'on vise on utilisera le "$" dollar
*/
// if (preg_match("#sent$#", "Alfonso sera présent")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;


/**
* 5) Les classes
* les classes présentées par exemple [aeiou]
* nous permettent de trouver un matching selon la liste
* qu'elle représente par exemple
*/
// if (preg_match("#ch[aeiou]let#", "chelet")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;

/**
* 6) NEGATION dans les classes
* Pour vérifier que dans une classe un caractère n'est
* pas égale à "a" par exemple nous ferrons
* [^a]... dans une classe le circonflexe est une négation
*/
// if (preg_match("#^[^c]halet#", "ahalet")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;


/**
* 7) Raccourci classe
* pour les lettre [a-z]
* pour les majuscules [A-Z]
* pour les chiffres [0-9]
* Pour les cumuler [a-zA-Z0-9]
* Meme si l'option i est spécifié ce qui est recherché dans
* les classes primera
*/
// if (preg_match("#[^a-z]halet#", "Chalet")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;




 ?>
