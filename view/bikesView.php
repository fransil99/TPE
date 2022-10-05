<?php
require_once('libs/Smarty.class.php');
class BikesView
{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }
   
    public function showBikes($bikes)
    {
        $this->smarty->assign('bikes',$bikes);
        $this->smarty->display('templates/bikes.tpl');
    }

    public function showItem($item)
    {
        $this->smarty->assign('item',$item);
        $this->smarty->display('templates/viewItem.tpl'); 
    }

    public function formEditBike($id, $brands,$bike){
        $this->smarty->assign('brands',$brands);
        $this->smarty->assign('id',$id);
        $this->smarty->assign('bike',$bike);
        $this->smarty->display('templates/editItem.tpl');
    }

    public function showError($msgError)
    {
        
    }
}
