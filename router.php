<?php
include_once "controller/bikesController.php";

//base URl
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leer la accion

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);


switch ($params[0]) {
    case 'home':
        $controller = new BikesController;
        $controller->showAll();
        break;
    case 'marcas':
        $controller = new BikesController;
        $controller->showByBrand($params[1]);    //params 1 seria la marca:
        break;
    case 'view';
    $controller = new BikesController;
    $controller->viewItem($params[1]); // seria el id moto

    default:
       echo 'default';
        break;
}
