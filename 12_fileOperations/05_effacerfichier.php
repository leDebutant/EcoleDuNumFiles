<?php
//Effacer les fichiers avec la fonction unlink
if (!unlink('testfile3.new')) echo "Could not delete file";
else echo "File 'testfile3.new' successfully deleted";

// Cette fonction permet de scanner la présence des fichiers
// qui se trouve dans un dossier. Le résultat est le nom des
// fichiers sous forme d'array
// scandir("./");

// var_dump(scandir("./"));
 ?>
