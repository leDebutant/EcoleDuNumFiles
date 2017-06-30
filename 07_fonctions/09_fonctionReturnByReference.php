<?php

$chanteur = array(
  'Taylor Swift',
  'Ariana Grande',
  'Prince',
  'Alizée');

// return by reference
// le & indique qu'on retournera un élément par référence
// Dans le paramêtre &$haystack nous dit qu'on doit
// passer cet élément par référence
  function &array_find_value($needle, &$haystack) {
      foreach ($haystack as $key => $value) {
          if ($needle == $value) {
              return $haystack[$key];
          }
      }
  }
  //$prince sera un référence à laquelle on y attribuera
  // une valeur
  $prince = &array_find_value("Prince",$chanteur);
  var_dump($prince);

  $prince = "Prince est encore vivant dans nos mémoires";

  // C'est la valeur dans le tableau qui change
  var_dump($chanteur);


 ?>
