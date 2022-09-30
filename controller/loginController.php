<?php
include_once "view/loginView.php";
include_once "model/loginModel.php";

class LoginController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }

    public function viewLogin(){
        
    }
}