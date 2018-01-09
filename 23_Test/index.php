<?php

include_once 'autoloader.php';
session_start();


$user = new User();
$_SESSION['user']=$user;