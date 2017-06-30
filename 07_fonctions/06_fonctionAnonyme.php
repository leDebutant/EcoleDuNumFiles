<?php

/* FONCTION ANONYME */
// $message = "hello World";
// $num = 256;
//
// $maFonction = function() use ($message,$num){
//   var_dump($message);
//   var_dump($num);
// };
//
// $maFonction();


/* FONCTION ALIAS
 * Similaire aux $a $$a $$$a...
 */

function maFonction($num){
  echo $num;
  echo "ceci est maFonction";
}

$num = 255;

$variable = "maFonction";
$variable($num);


 ?>
