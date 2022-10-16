<?php
require_once "model/brandModel.php";
require_once "view/brandView.php";
require_once "helpers/authHelper.php";
require_once "model/bikesModel.php";
class BrandController
{
    private $model;
    private $view;
    private $authHelper;
    private $bikesModel;

    public function __construct()
    {
        $this->bikesModel = new BikesModel;
        $this->model = new BrandModel();
        $this->view = new BrandView();
        $this->authHelper = new AuthHelper();
    }

    public function showBrands()
    {
        session_start();
        $brands = $this->model->getAllBrands();
        $this->view->showAllBrands($brands);
    }

    public function formCreateBrand()
    {
        $this->view->showCreateBrand();
    }

    public function formEditBrand($id)
    {
        $brand = $this->model->getBrand($id);
        $this->view->formEditBrand($brand);
    }

    function addBrand()
    {
        $this->authHelper->checkLoggedIn();
        if (!empty($_POST['brand']) && !empty($_POST['description'])) {
            $brand = ($_POST['brand']);
            $description = ($_POST['description']);
            if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png") {
                $this->model->insertBrand($_FILES['imagen']['tmp_name'], $brand, $description);
            } else {
                $this->model->insertBrand(null, $brand, $description);
            }
            header("Location:" . BASE_URL . "brands");
        } else {
            $this->view->showError("No se puede agregar");
        }
    }


    function editBrand($id)
    {
        $this->authHelper->checkLoggedIn();
        if (!empty($_POST['nombre']) && !empty($_POST['descripcion'])) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png") {
                $this->model->editBrandbyId($id, $nombre, $_FILES['imagen']['tmp_name'], $descripcion);
            } else {
                $this->model->editBrandbyId($id, $nombre, null, $descripcion);
            }
            header("Location:" . BASE_URL . "brands");
        } else {
            $this->view->showError("No se puede editar");
        }
    }


    function deleteBrand($id)
    {
        $this->authHelper->checkLoggedIn();
        $brand = $this->bikesModel->getAllbyBrand($id);
        if (!empty($brand)) {
            $this->view->showAllBrands(null, "No se puede eliminar marca, contiene motos!");
        } else {
            $this->model->deleteBrandbyId($id);
            header("Location:" . BASE_URL . "brands");
        }
    }
}
