<?php


// if (preg_match("#([0-9]{2}(\.|-|\/)?){4}[0-9]{2}#", "06.98.02.57.82")):
//     echo 'trouve';
// else:
//     echo 'ne trouve pas';
// endif;


// preg_replace permet de remplacer le modele qui est
// spécifié dans la chaine de caractère
// $string = "06.98.02.57.82";
// $result =  preg_replace("#\.#","-",$string);
//
// echo $result;

// CHALLENGE 2
// FILTRER UN AGE ENTRE 1 ET 99

if (preg_match("#^([1-9]{1}[0-9]{1}|[1-9]{1})$#", "9")):
    echo 'trouve';
else:
    echo 'ne trouve pas';
endif;

 ?>
