<?php
//Generalement ces fonctions retourne un booléen
// Dans les système unix bouger un fichier équivaut à un
// rename

if (!rename('testfile.txt', 'move/testfile3.new'))
  echo "Could not rename file";
else echo "File successfully renamed to 'testfile3.new'";

 ?>
