<?php
require_once('libs/Smarty.class.php');
class BrandView
{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showAllBrands($brands, $error = null){
        $this->smarty->assign('brands',$brands);
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/brands.tpl');
    }

    public function showCreateBrand(){
        $this->smarty->display('templates/createBrand.tpl');
    }

    public function formEditBrand($brand){
        $this->smarty->assign('brand',$brand);
        $this->smarty->display('templates/editBrand.tpl');
    }

    public function showError(){
        $this->smarty->display("error");
    }
}