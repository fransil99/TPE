<?php
require_once "model/brandModel.php";
require_once "view/brandView.php";
class BrandController{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new BrandModel();
        $this->view = new BrandView();
    }

    public function showBrands(){
        $brands = $this->model->getAllBrands();
        $this->view->showAllBrands($brands);
    }

    public function createBrand(){
        $this->view->showCreateBrand();
    }
    
    public function addBrand(){
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

    public function formEditBrand($id)
    {
        $brand = $this->model->getBrand($id);
        $this->view->formEditBrand($brand);
    }

    public function editBrand($id){
            if (!empty($_POST['nombre']) && ($_POST['imagen']) && ($_POST['descripcion'])) {
                $nombre = $_POST['nombre'];
                $imagen = $_POST['imagen'];
                $descripcion = $_POST['descripcion'];
                $this->model->editBrandbyId($id,$nombre,$imagen,$descripcion);
                header("Location:" . BASE_URL . "brands");
            }
        
    }


    public function deleteBrand($id){
        $this->model->deleteBrandbyId($id);
        header("Location: ".BASE_URL."brands");
    }
}