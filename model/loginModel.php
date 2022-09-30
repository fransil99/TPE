<?php

class LoginModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_motos;charset=utf8', 'root', '');
    }
    /*Obtengo la lista de motos */

}