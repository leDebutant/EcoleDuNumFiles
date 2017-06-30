<?php

function calculMoyenne(){
  // Cette fonction recupere le tableau entier
  $params = func_get_args();
  // equivalent au count ici
   $size = func_num_args();
  // var_dump(count($params));
  // Cette deuxième fonction recupère seulement
  // le paramêtre

  $sum = 0;
  for ($i = 0; $i < $size; $i++) {
      //piocher les arguments
      $sum += func_get_arg($i);
  }

  $resultat = $sum / $size;
  var_dump($resultat);
}

calculMoyenne(12,56,45,85);
