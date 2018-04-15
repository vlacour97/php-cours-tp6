<?php

$getRoute = $_GET['route'] != '' ? $_GET['route'] : 'home';
$routes = [
    'home' => 'page1',
    'contact' => 'page2',
];

if (!isset($routes[$getRoute])) {
    http_response_code(404); //Changement des entêtes
    $currentController = 'errors/404'; //Redirection vers le contrôleur 404
} else {
    $currentController = $routes[$getRoute];
}


include 'elements/_head.php';
include 'elements/_navbar.php';
include 'controllers/'.$currentController.'.php';
include 'elements/_footer.php';

