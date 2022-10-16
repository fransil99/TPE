<?php
include_once "view/bikesView.php";
include_once "model/bikesModel.php";
include_once "model/brandModel.php";
include_once "helpers/authHelper.php";
class BikesController
{
    private $model;
    private $view;
    private $modelBrand;
    private $authHelper;

    public function __construct()
    {
        $this->modelBrand = new BrandModel();
        $this->model = new BikesModel();
        $this->view = new BikesView();
        $this->authHelper = new AuthHelper();
    }

    public function showHome()
    {
        session_start();
        $this->view->showHome();
    }

    public function showAll()
    {
        $bikes = $this->model->getAllBikes();
        $this->view->showBikes($bikes);
    }

    public function showByBrand($id)
    {
        $brand = $this->modelBrand->getBrand($id);
        $bikes = $this->model->getAllByBrand($id);
        $this->view->showBikes($bikes, $brand);
    }

    public function viewItem($id)
    {
        $item = $this->model->getBike($id);
        if (!empty($item))
            $this->view->showItem($item);
    }

    public function formEditItem($id)
    {
        $brands = $this->modelBrand->getAllBrands();
        $bike = $this->model->getBike($id);
        $brand = $this->modelBrand->getBrand($bike->id_marca_fk);
        $this->view->formEditBike($bike, $brands, $brand);
    }


    public function formAddBike()
    {
        $brands = $this->modelBrand->getAllBrands();
        $this->view->showCreateBike($brands);
    }

    function deleteBike($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteBikebyId($id);
        header("Location: " . BASE_URL . "showAll");
    }

    function createBike()
    {
        $this->authHelper->checkLoggedIn();
        if (!empty($_POST['nombre']) && !empty($_POST['descripcion']) && !empty($_POST['cilindrada']) && !empty($_POST['precio']) && !empty($_POST['idFk'])) 
        {
            $nombre = $_POST['nombre'];
            $descripcion = ($_POST['descripcion']);
            $cilindrada = $_POST['cilindrada'];
            $precio = $_POST['precio'];
            $idFk = $_POST['idFk'];
                if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png") 
                {
                    $this->model->insertBike($nombre,$_FILES['imagen']['tmp_name'],$descripcion,$cilindrada,$precio,$idFk);
                } else {
                    $this->model->insertBike($nombre,null,$descripcion,$cilindrada,$precio,$idFk);
                }       
            header("Location:" . BASE_URL . "showAll");
        }else{
            $this->view->showError("No se puede crear");
        }
    }
     
    function editBike($id)
    {
        $this->authHelper->checkLoggedIn();
        if (!empty($_POST['nombre'])&& !empty($_POST['descripcion']) && !empty($_POST['cilindrada']) && !empty($_POST['precio']) && !empty($_POST['idFk'])) 
        {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $cilindrada = $_POST['cilindrada'];
            $precio = $_POST['precio'];
            $idFk = $_POST['idFk'];
            if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png") 
                {
                    $this->model->editBikebyId($id, $nombre, $_FILES['imagen']['tmp_name'], $descripcion, $cilindrada, $precio, $idFk);
                } else {
                    $this->model->editBikebyId($id, $nombre,null, $descripcion, $cilindrada, $precio, $idFk);
                }
            header("Location:" . BASE_URL . "showAll");
        }else{
            $this->view->showError("No se puede editar");
        }
    }

}

