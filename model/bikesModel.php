<?php

class BikesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_motos;charset=utf8', 'root', '');
    }
    /*Obtengo la lista de motos */

    public function getAll()
    {
        $query = $this->db->prepare('SELECT * FROM motos');
        $query->execute();
        $bikes = $query->fetchAll(PDO::FETCH_OBJ);;
        return $bikes;
    }

    public function getAllbyBrand($brand)
    {
        $query = $this->db->prepare('SELECT * FROM motos WHERE id_marca_fk = ?');
        $query->execute([$brand]);
        $bikes = $query->fetchAll(PDO::FETCH_OBJ);
        return $bikes;
    }
    
    public function getItem($id){
        $query = $this->db->prepare('SELECT * FROM motos INNER JOIN marcas ON marcas.id_marca_fk = motos.id_marca_fk WHERE id_moto = ?');
        $query->execute([$id]);
        $item = $query->fetch(PDO::FETCH_OBJ);;
        return $item;
    }

















    public function getAllbyCylinder($cylinder)
    {
        $query = $this->db->prepare('SELECT * FROM motos WHERE cilindrada = ? ORDER BY nombre ASC');
        $query->execute([$cylinder]);
        $bikes = $query->fetchAll(PDO::FETCH_OBJ);
        return $bikes;
    }
}
