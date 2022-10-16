<?php

class BrandModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_motos;charset=utf8', 'root', '');
    }

    public function getBrand($id){
        $query = $this->db->prepare('SELECT * FROM marcas WHERE id_marca = ?');
        $query->execute([$id]);
        $brand = $query->fetch(PDO::FETCH_OBJ);
        return $brand;
    }

    public function getAllBrands(){
        $query = $this->db->prepare('SELECT * FROM marcas');
        $query->execute();
        $brands = $query->fetchAll(PDO::FETCH_OBJ);;
        return $brands;
    }

    public function insertBrand($image, $brand, $description){
        $query = $this->db->prepare('INSERT INTO marcas (nombre_marca,descripcion_marca,imagen_marca) VALUES (?,?,?)');
        $query->execute(array($brand, $description, $image));
    }

    public function deleteBrandbyId($id){
        $query = $this->db->prepare('DELETE FROM marcas WHERE id_marca=?');
        $query->execute([$id]);
    }

    public function editBrandbyId($id,$nombre,$imagen,$descripcion){
        $query = $this->db->prepare('UPDATE marcas SET nombre_marca=?,imagen_marca=?,descripcion_marca=? WHERE id_marca=?');
        $query->execute(array($nombre,$imagen,$descripcion,$id));
    }
}
