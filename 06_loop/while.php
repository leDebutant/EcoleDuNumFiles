<?php

// $i = 15;

//attention au boucles infini
// ça peut faire crasher le navigateur
// et gaspiller des ressources
//serveur

// while ( $i > 10){
//   echo --$i . '<br>';
// }


$i = 2;

while ($i < 10){
  $i++;
  echo $i . '<br>';
  if($i == 8){
    echo "statement 8";
    continue;
  }
}
// le mot clé break permet
// de casser la boucle dans
// laquelle on tourne.
// il marche pour toutes
// les boucles




 ?>
