<?php
  // $string = "Ceci est un chaine";
  // $string2 = 'Ceci est un chaine';
  //
  // $livre = "<b>L'hitoire $string sans fin</b>";
  // $livre2 = 'L\'hitoire $string sans fin';
  //
  // $quote = "Marie dit :\"Ceci est fantastique\"";
  //
  //
  //
  // var_dump($livre);

/* HEREDOC */

// $titre = "Star Wars";
// $auteur = "George Lucas";
// $android = "R2D2";
//
// $heredoc = <<< EOT
//   Dans $titre, l'auteur $auteur donne "vie" à
//   $android
// EOT;
//
// echo $heredoc;

$descriptions = [
    'Idem' => 'audiovisuel',
    'Univ' => 'droit'
];

$description = "L'idem est
une école d {$descriptions['Idem']}";

echo $description;



 ?>
