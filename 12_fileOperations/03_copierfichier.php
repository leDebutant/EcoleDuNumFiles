<?php
// -Pour copier le fichier nous n'avons pas besoin de l'ouvrir
// la simple fonction copy suffit!
// -On peut créer le fichier avec l'extension qu'on veut
// -Donc attention si on a des infos sensibles il faut
// les protéger avec les bonnes permissions
copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
echo "File successfully copied to 'testfile2.txt'";
