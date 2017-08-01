<?php
session_start();
require 'vendor/autoload.php';
require 'autoloader.php';

Flight::render('header', array('heading' => 'Hello'), 'header');
Flight::render('footer', array('tests' => 'World'), 'footer');

/*******  TESTS UNITAIRES *****
 * Ils servent à tester des parties de code
 * ou encore des objets spécifiques ou encore
 * des méthodes.
 * On peut automatiser ces tests pour ne pas
 * devoir les refaire manuellement à chaque fois.
 *****/







Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/login', function(){
    Flight::render('login');
});

Flight::route('POST /loginService', function(){
    unset($_SESSION['erreur']);
    $service = new loginService();
    $service->setParams(Flight::request()->data->getData());
    $service->launchControls();
    if($service->getError()){
        $_SESSION['erreur']=$service->getError();
        Flight::redirect('/login');
    }
    Flight::redirect('acceuil');
});

Flight::route('/acceuil',function(){
    echo "Winner!";
});


Flight::start();