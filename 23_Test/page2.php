<?php

include_once 'autoloader.php';

session_start();



$object = $_SESSION['user'];

var_dump($object);