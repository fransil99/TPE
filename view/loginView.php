<?php
require_once('libs/Smarty.class.php');
class LoginView
{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }
}