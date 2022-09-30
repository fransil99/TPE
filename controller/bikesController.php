<?php
include_once "view/bikesView.php";
include_once "model/bikesModel.php";

class BikesController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new BikesModel();
        $this->view = new BikesView();
    }
    public function showAll()
    {
        $bikes = $this->model->getAll();
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






    public function showByCylinder($cylinder)
    {
        $motos = $this->model->getAllbyCylinder($cylinder);
        if (!empty($motos)) {
            $this->view->showBikes($motos);
        } else {
            $this->view->showError('No hay motos de ese genero');
        }
    }
}
