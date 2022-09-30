<?php
include_once "controller/bikesController.php";
include_once "controller/loginController.php";

//base URl
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leer la accion

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new BikesController;
$login = new LoginController;

switch ($params[0]) {
    case 'home':
        $controller;
        $controller->showAll();
        break;
    case 'marcas':
        $controller;
        $controller->showByBrand($params[1]);    //params 1 seria la marca:
        break;
    case 'view';
    $controller;
    $controller->viewItem($params[1]);
    case 'edit';
    $controller;
    //s$controller->editItem($params[1]); // seria el id moto
    case 'login';
    $login;
    $login->viewLogin();
    break;
    default:
       echo 'default';
        break;
}
