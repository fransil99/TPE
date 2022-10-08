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

$bikesController = new BikesController;
$loginController = new LoginController;
$brandController = new BrandController;

switch ($params[0]) {
    case 'home':
        $bikesController->showAll();
        break;
    case 'brands':
        $brandController->showBrands();
        break;
    case 'bikeBrands':
        $bikesController->showByBrand($params[1]);    //params 1 seria la marca:
        break;
    case 'viewBike';
        $bikesController->viewItem($params[1]);
        break;
    case "createBrand";
        $brandController->createBrand();
        break;
    case 'editBike';
        $bikesController->formEditItem($params[1]); // seria el id moto
        break;
    case 'editBike':
        $bikesController->editBike($params[1]);
        break;
    case 'addBrand':
        $brandController->addBrand();
        break;
    case 'formAddBike':
        $bikesController->formAddBike();
        break;
    case "createBike";
        $bikesController->createBike();
        break;
    case 'deleteBike';
        $bikesController->deleteBike($params[1]);
        break;
    case 'deleteBrand';
        $brandController->deleteBrand($params[1]);
        break;
    case 'login';
        $loginController->viewLogin();
        break;
    case 'formEditBrand':
        $brandController->formEditBrand($params[1]);
        break;
    case 'editBrand':
        $brandController->editBrand($params[1]);
        break;
    default:
        echo 'default';
        break;
}
