<?php
session_start();
require 'vendor/autoload.php';

Flight::render('header', array(), 'header');

Flight::route('/', function(){
    Flight::render('index');
});

Flight::route('/contact-us', function(){
    Flight::render('contact-us');
});
Flight::route('/contact-us-service', function(){
    $_SESSION['data'] = Flight::request()->data->getData();

    Flight::redirect('/');

});

Flight::route('/articles', function(){
    Flight::render('articles');
});

Flight::route('/article', function(){
    Flight::render('article');
});

Flight::route('/about-us', function(){
    Flight::render('about-us');
});



Flight::route('/sitemap', function(){
    Flight::render('sitemap');
});


Flight::start();