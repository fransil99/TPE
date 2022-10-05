<?php
include_once "controller/bikesController.php";
include_once "controller/loginController.php";
include_once "controller/brandController.php";

//base URl
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// leer la accion

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new BikesController;
$login = new LoginController;
$brand = new BrandController;

switch ($params[0]) {
    case 'home':
        $controller->showAll();
        break;
    case 'brands':
        $brand->showBrands();
        break;
    case 'bikeBrands':
        $controller->showByBrand($params[1]);    //params 1 seria la marca:
        break;
    case 'view';
        $controller->viewItem($params[1]);
        break;
    case "createBrand";
        $brand->createBrand();
        break;
    case 'edit';
        $controller->formEditItem($params[1]); // seria el id moto
        break;
    case 'editBike':
        $controller->editBike();
        break;
    case 'addBrand':
        $brand->addBrand();
        break;
    case 'deleteBrand';
        $brand->deleteBrand($params[1]);
        break;
    case 'login';
        $login->viewLogin();
        break;
    default:
        echo 'default';
        break;
}
