<?php

// On défini une constante (quelque chose qui n'a pas lieu à
// changer) avec la fonction define()
//     On la nomme et on lui attribut une valeur
// define('PHP_MA_CONSTANTE',512);
//
// echo PHP_MA_CONSTANTE;

// Il y a une autre façon
// echo '<br>';
// const NOUVELLE_CONST = 128;
// echo NOUVELLE_CONST;


// Il existe des constante qui sont défini par le système
// lui même

// Nous indique la ligne sur laquelle nous sommes dans le doc
// echo __LINE__;

// affiche le chemin et le nom du fichier
// echo __FILE__;

//affiche le dossier qui contient le fichier
// équivalent dirname(__FILE__)
// echo __DIR__;


//__FUNCTION__ nous donnera le nom de la fonction qui
// est appelée
// function ceciEstMaFonction(){
//   echo __FUNCTION__;
// }
//
// ceciEstMaFonction();

// class MyClass{
//   public function myMethod(){
//     // Ceci affichera la classe qui détient la fonction
//     // qui est appelée
//       echo __CLASS__;
//   }
//
//   public function myMethod2(){
//       // Ceci affichera et la classe et la methode
//       // qui sont appelées
//       echo __METHOD__;
//   }
// }
//
// $class = new MyClass();
// $class->myMethod2();

 ?>
