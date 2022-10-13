<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
include_once "controller/bikesController.php";
include_once "controller/brandController.php";
include_once "controller/authController.php";

//base URl

// leer la accion

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login';
}

$params = explode('/', $action);

$authController = new AuthController;
$bikesController = new BikesController;
$brandController = new BrandController;

switch ($params[0]) {
    case 'login':
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController->validateUser();
        break;
    case 'hash':
        $authController->generateHash();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'home':
        $bikesController->showHome();
        break;
    case 'showAll':
        $bikesController->showAll();
        break;
    case 'bikeBrands':
        $bikesController->showByBrand($params[1]);    //params 1 seria la marca:
        break;
    case 'viewBike';
        $bikesController->viewItem($params[1]);
        break;
    case 'formEditBike';
        $bikesController->formEditItem($params[1]); // seria el id moto
        break;
    case 'editBike':
        $bikesController->editBike($params[1]);
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
    case 'brands':
        $brandController->showBrands();
        break;
    case "createBrand";
        $brandController->formCreateBrand();
        break;
    case 'addBrand':
        $brandController->addBrand();
        break;
    case 'deleteBrand';
        $brandController->deleteBrand($params[1]);
        break;
    case 'formEditBrand':
        $brandController->formEditBrand($params[1]);
        break;
    case 'editBrand':
        $brandController->editBrand($params[1]);
        break;
    default:
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
        break;
}
