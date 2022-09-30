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

    public function showError($msgError)
    {
        
    }
}
