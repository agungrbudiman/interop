<?php 
    $page = $_GET['page'];
    switch ($page) {
        case 'signin':
            require_once 'signin.php';
            break;

        case 'signin-check':
            require_once 'signin-check.php';
            break;
        
        case 'signout':
            require_once 'signout.php';
            break;

        case 'forgot':
            require_once 'forgot.php';
            break;

        case 'reset':
            require_once 'reset.php';
            break;

        default:
            require_once "lib/lib-session.php";
            require_once "index-base.php";
            break;
    }
?>

