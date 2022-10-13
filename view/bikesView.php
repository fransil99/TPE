<?php
require_once('libs/Smarty.class.php');
class BikesView
{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }
   
    public function showBikes($bikes, $brand = null)
    {
        session_start();
        $this->smarty->assign('brand',$brand);
        $this->smarty->assign('bikes',$bikes);
        $this->smarty->display('templates/bikes.tpl');
    }

    public function showItem($item)
    {
        $this->smarty->assign('item',$item);
        $this->smarty->display('templates/viewItem.tpl'); 
    }


    public function formEditBike($bike,$brands){
        $this->smarty->assign('brands',$brands);
        $this->smarty->assign('bike',$bike);
        $this->smarty->display('templates/editItem.tpl');
    }
    public function showCreateBike($brands){
        $this->smarty->assign('brands',$brands);
        $this->smarty->display('templates/createBike.tpl');
    }

    public function showError($error){
        echo $error;
    }

    public function showHome(){
        $this->smarty->display('templates/showHome.tpl');
    }
}
