<?php
require_once "model/brandModel.php";
require_once "view/brandView.php";
require_once "helpers/authHelper.php";
class BrandController{
    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new BrandModel();
        $this->view = new BrandView();
        $this->authHelper = new AuthHelper();
    }

    public function showBrands(){
        session_start();
        $brands = $this->model->getAllBrands();
        $this->view->showAllBrands($brands);
    }

    public function createBrand(){
        $this->view->showCreateBrand();
    }
    
    public function formEditBrand($id)
    {
        $brand = $this->model->getBrand($id);
        $this->view->formEditBrand($brand);
    }

     function addBrand(){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST['image'])&&($_POST['brand'])&&($_POST['description'])){
        $image = ($_POST['image']);
        $brand = ($_POST['brand']);
        $description = ($_POST['description']);
        $this->model->insertBrand($image, $brand, $description);    
        header("Location:".BASE_URL."brands");
        }else{
        $this->view->showError();
        }
    }


     function editBrand($id){
            $this->authHelper->checkLoggedIn();
            if (!empty($_POST['nombre']) && ($_POST['imagen']) && ($_POST['descripcion'])) {
                $nombre = $_POST['nombre'];
                $imagen = $_POST['imagen'];
                $descripcion = $_POST['descripcion'];
                $this->model->editBrandbyId($id,$nombre,$imagen,$descripcion);
                header("Location:" . BASE_URL . "brands");
            }
        
    }


     function deleteBrand($id){
        $this->authHelper->checkLoggedIn();
        $brand = $this->model->getBrand($id);
        if(!empty ($brand) ){
            $this->view->showAllBrands(null, "No se puede eliminar marca, contiene motos!");
        }
        else{$this->model->deleteBrandbyId($id);}
        
    }
}