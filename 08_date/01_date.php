<?php

$noel = strtotime('Dec 25, 2016');

// Ceci va afficher
// les nombre de secondes entre la date en question
// et le 1 janvier 1970

$resultDate = date("'l / j F / Y'",$noel);
var_dump($resultDate);


//
//DateTime() c'est un objet on le vera après

 ?>
