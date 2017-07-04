<?php

    if( isset($_GET['page']) ) {
        $page = $_GET['page'];
    } else {
        $page = 'login';
    }

//    var_dump($page);
//    die();

	switch( $page ) {
		case 'login':
			include_once('view/login.php');
			break;
		case 'wall':
			include_once('view/wall.php');
			break;
	}