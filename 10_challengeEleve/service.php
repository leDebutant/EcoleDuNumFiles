<?php

// Service.php
$eleves = [
  ["prenom"=>"Stephane","nom"=>"Fressinet"],
  ["prenom"=>"Albert","nom"=>"Camus"],
  ["prenom"=>"Zinedine","nom"=>"Zidane"],
];

if(!empty($_POST['nom']) && !empty($_POST['prenom'])){

    $var = "controle=echec";
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    foreach($eleves as $e){
      $resultNom = in_array($nom, $e);
      $resultPrenom = in_array($prenom,$e);
      if($resultNom && $resultPrenom){
          $var = "controle=succes";
          break;
      }
    }
}

// $_POST -> Vous devez receuillir les données postées
// les comparez avec l'array $eleves

// feedback dans le front end via une methode GET

// pour rédiriger de la page service.php à la page
// formulaire.php il faut utiliser la methode header();

header("location: formulaire.php?$var");

 ?>
