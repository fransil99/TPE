<?php
require_once('libs/Smarty.class.php');
class BrandView
{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showAllBrands($brands){
        $this->smarty->assign('brands',$brands);
        $this->smarty->display('templates/brands.tpl');
    }

    public function showCreateBrand(){
        $this->smarty->display('templates/createBrand.tpl');
    }

    public function showError(){
        $this->smarty->display("error");
    }
}