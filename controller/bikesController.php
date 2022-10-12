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
    public function showAll()
    {
        $brand = null;
        $bikes = $this->model->getAllBikes();
        $this->view->showBikes($bikes,$brand);

    }

    public function showByBrand($id)
    {
        $bikes = $this->model->getAllByBrand($id);
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
        $bike = $this->model->getBike($id);
        $brand = $this->modelBrand->getBrand($bike->id_marca_fk);
        $this->view->formEditBike($bike,$brands,$brand);
    }

    
    public function formAddBike(){
        $brands = $this->modelBrand->getAllBrands();
        $this->view->showCreateBike($brands);
    }

    function deleteBike($id){
       $this->authHelper->checkLoggedIn();
       $this->model->deleteBikebyId($id);
       header("Location: ".BASE_URL."home");
   }

     function createBike(){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST['nombre'])&&($_POST['imagen'])&&($_POST['descripcion'])&&($_POST['cilindrada']) && ($_POST['precio'])&& ($_POST['idFk'])){
        $nombre = $_POST['nombre'];
        $imagen = ($_POST['imagen']);
        $descripcion = ($_POST['descripcion']);
        $cilindrada = $_POST['cilindrada'];
        $precio = $_POST['precio'];
        $idFk= $_POST['idFk'];
        $this->model->insertBike($nombre,$imagen,$descripcion,$cilindrada,$precio,$idFk);    
        header("Location:".BASE_URL."home");
        }else{
        $this->view->showError("error");
        }
    }


     function editBike($id)
    {
        $this->authHelper->checkLoggedIn();
        if (!empty($_POST['nombre']) && ($_POST['imagen']) && ($_POST['descripcion']) && ($_POST['cilindrada']) && ($_POST['precio'])&& ($_POST['idFk'])) {
            $nombre = $_POST['nombre'];
            $imagen = $_POST['imagen'];
            $descripcion = $_POST['descripcion'];
            $cilindrada = $_POST['cilindrada'];
            $precio = $_POST['precio'];
            $idFk= $_POST['idFk'];
            $this->model->editBikebyId($id,$nombre,$imagen,$descripcion,$cilindrada,$precio,$idFk);
            header("Location:" . BASE_URL . "home");
        }
    }
}
