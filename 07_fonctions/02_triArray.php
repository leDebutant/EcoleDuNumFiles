<?php
// $characters = [
//     'Benzema',
//     'Ribery',
//     'Platini',
//     'Evra',
//     'Payet'
// ];
//
// // ordre croissant
// sort($characters);
//
// //ordre décroissant
// rsort($characters);
//
// var_dump($characters);

// $number = 2;
//
// // Pass by reference
// function doubleIt(&$num) {
//     return $num *= 2;
// }
//
// $resultat = doubleIt($number); // resulat = 4   number = 2
//
// var_dump($resultat); // resultat 4
// var_dump($number);  // number est égal à 4 quand la valeur est passée par référence


$classe = [
    ['first' => 'Melvin', 'last' => 'Chabin'],
    ['first' => 'Frédéric', 'last' => 'Mas'],
    ['first' => 'Alfonso', 'last' => 'Fernandez'],
];

function triArray($a,$b){
  if ([$a['last'], $a['first']] < [$b['last'], $b['first']]) {
      return -1;
  } elseif ([$a['last'], $a['first']] > [$b['last'], $b['first']]) {
      return 1;
  } else {
      return 0;
  }
}

usort($classe, "triArray");
// uasort pour les tableau associtifs
// uksort de même mais comparera les clés

echo count($classe);

// var_dump($classe);

?>
