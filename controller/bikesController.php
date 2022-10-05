<?php
include_once "view/bikesView.php";
include_once "model/bikesModel.php";
include_once "model/brandModel.php";
class BikesController
{
    private $model;
    private $view;
    private $modelBrand;

    public function __construct()
    {
        $this->modelBrand = new BrandModel();
        $this->model = new BikesModel();
        $this->view = new BikesView();
    }
    public function showAll()
    {
        $bikes = $this->model->getAllBikes();
        if (!empty($bikes)) {
            $this->view->showBikes($bikes);
        } else {
            $this->view->showError('No hay motos de ese genero');
        }
    }

    public function showByBrand($brand)
    {
        $bikes = $this->model->getAllByBrand($brand);
        $this->view->showBikes($bikes);
    }

    public function viewItem($id)
    {
        $item = $this->model->getItem($id);
        if (!empty($item))
            $this->view->showItem($item);
    }

    public function formEditItem($id)
    {
        $brands = $this->modelBrand->getAllBrands();
        $bike = $this->model->getItem($id);
        $this->view->formEditBike($id,$bike,$brands);
    }

    public function editBike()
    {
        if (!empty($_POST['nombre']) && ($_POST['imagen']) && ($_POST['descripcion']) && ($_POST['cilindrada']) && ($_POST['precio']) && ($_POST['idFk']) && ($_POST['id'])) {
            $nombre = $_POST(['nombre']);
            $imagen = $_POST(['imagen']);
            $descripcion = $_POST(['descripcion']);
            $cilindrada = $_POST(['cilindrada']);
            $precio = $_POST(['precio']);
            $idFk = $_POST(['idFk']);
            $id = $_POST(['id']);
            $this->model->editBikebyId($nombre, $imagen, $descripcion, $cilindrada, $precio, $idFk, $id);
            header("Location:" . BASE_URL . "brands");
        }
    }
}
