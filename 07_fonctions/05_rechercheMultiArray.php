<?php
// tableau multidimensionnel trois niveaux
$tableau = [
    ['ordi'=>"PC"],
    [
      ['OS'=>'Windows']
    ],
    "NT",
    "Irix",
    "Linux"
];
// On va créer une fonction qui va rechercher
// dans cet array une valeur.
// Ce n'est pas possible avec une
// fonction native

/*
  $needle -> aiguille ce qu'on veut rechercher
  $haystack -> le tableau dans lequel on veut rechercher
  $strict -> Si on veut que notre condition soit stricte
  c'est à dire "===" ou pas "=="
*/
// comparateur ternaire
// $result = ($item==="valeur") ? true : false;

function array_searcher($needle,$haystack,$strict=false){
  foreach($haystack as $item){
      if( ($strict ? $item === $needle:$item == $needle)
      || (is_array($item)
          && array_searcher($needle,$item,$strict))){
            //return arrête la fonction de
            // s'executer.. ce qui suit
        return true;
      }
  }
  return false;
}


$result = array_searcher("PC",$tableau,true);

var_dump($result);




// Windows rend faux
// à investiguer pourquoi... j'ai oublié de mettre les parenthèse

