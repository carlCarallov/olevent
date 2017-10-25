<?php
$route = $_GET['route'];

require 'templates/header.php';

switch($route){
    case '':
        require 'templates/main.php';
        break;
    case 'parthner':
        require 'templates/parthner.php';
        break;
    case 'contacts':
        require 'templates/contacts.php';
        break;
    default:
        require 'templates/notFound.php';
}

require 'templates/footer.php';