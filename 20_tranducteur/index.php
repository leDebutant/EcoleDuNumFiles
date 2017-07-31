<?php
session_start();
require 'flight/Flight.php';
require 'model/Translator.php';

Flight::route('/formulaire', function(){

    if(isset($_SESSION['langue'])){
        $langue = $_SESSION['langue'];
    }else{
        //ma langue par défaut
        $langue = "en_GB";
    }
    $translator = new Translator();
    $translator->launchTranslator();
    $translator->setLanguage($langue);
    //Ensuite on lancera notre objet Translator() dans model...
    Flight::render('formulaire',array(
        'translator' => $translator
    ));
});

Flight::route('/traductionService', function(){

    $_SESSION['langue']=$_POST['langue'];
    Flight::redirect('formulaire');
});

Flight::start();
?>
