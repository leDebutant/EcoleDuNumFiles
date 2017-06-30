<?php

  $chiffre = 10;
  $budget = 5;

// (condition) ? "resultat1":"resultat2";
// if.... ? veut dire alors
//        : veut dire sinon

  // $resultat = ($chiffre == 10)
  //   ? (($budget < $chiffre)?
  //         "on crêvera la dalle"
  //         :"super on mange")
  //   : "Ceci est faux";

$resultat = ($budget < 5) ?:
  "On peut faire les courses";

    var_dump($resultat);

 ?>
