<?php

//list permet de "casser" un tableau en variables
// qu'on nomme explicitement

$info = array('cafe', 'noir', 'cafeine');
// $info = ['cafe','noir','cafeine'];

list($boisson, $couleur, $sub) = $info;

echo "$boisson est de couleur $couleur est contient de la $sub";



 ?>
