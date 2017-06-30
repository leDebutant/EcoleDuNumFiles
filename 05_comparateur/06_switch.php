<?php

/* SWITCH String type */

// $nom="Ronaldo";
//
// switch ($nom) {
//   case 'Stephen Curry':
//     echo "Basketball player";
//     break;
//   case 'Ronaldo':
//     echo "Soccer player";
//     break; //break une fois un statement
//     //"vrai" atteint fait sortir du switch
//   default:
//     echo "Une personne inconnue";
//     break;
// }

/* Switch avec des valeurs numérique
    avec un comparateur. Il faut précli_set_process_titl
    la variable
 */
$total = 10;

switch($total) {
    case $total < 50:
        echo "inférieur à 50";
        break;
    case $total < 100:
        echo "inférieur à 100";
        break;
    case $total >= 100:
    echo "supérieur ou égale à 100";
}



 ?>
