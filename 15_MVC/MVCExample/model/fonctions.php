<?php

function getPage(){
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = "login";
  }
  return $page;
}

function getFeedback(){
  $control = false;
  if(isset($_GET['controle'])){
    $control = $_GET['controle'];
  }
  return $control;
}

function getUser(){
    // Des appels en base de données
    // Dans notre exemple nous créons les données
    // manuellement
    $user = ["alfonso","le_debutant@yahoo.fr"];
  return $user;
}

function getDescription(){
  // Des appels en base de données
  return "programming coach";
}

function getNombreUtilisateurs(){
  return 255;
}

 ?>
