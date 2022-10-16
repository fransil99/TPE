<?php

class BikesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_motos;charset=utf8', 'root', '');
    }
    /*Obtengo la lista de motos */


    public function getAllBikes()
    {
        $query = $this->db->prepare('SELECT * FROM motos ORDER BY precio DESC');
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


    public function getBike($id){
        $query = $this->db->prepare('SELECT * FROM motos INNER JOIN marcas ON marcas.id_marca = motos.id_marca_fk WHERE id_moto = ?');
        $query->execute([$id]);
        $item = $query->fetch(PDO::FETCH_OBJ);
        return $item;
    }

    // public function getBike($id){
    //     $query = $this->db->prepare('SELECT * FROM motos WHERE id_moto = ?');
    //     $query->execute([$id]);
    //     $item = $query->fetch(PDO::FETCH_OBJ);
    //     return $item;
    // }

    public function deleteBikebyId($id){
        $query = $this->db->prepare('DELETE FROM motos WHERE id_moto =?');
        $query->execute([$id]);
    }

    public function editBikebyId($id,$nombre,$imagen,$descripcion,$cilindrada,$precio,$idFk){
        $pathImg = null;
        if($imagen){
        $pathImg = $this->uploadImage($imagen);
        $query = $this->db->prepare('UPDATE motos SET nombre=?,imagen=?,descripcion=?,cilindrada=?,precio=?,id_marca_fk=? WHERE id_moto=?');
        $query->execute(array($nombre,$pathImg,$descripcion,$cilindrada,$precio,$idFk,$id));
    }else{
        $query = $this->db->prepare('UPDATE motos SET nombre=?,descripcion=?,cilindrada=?,precio=?,id_marca_fk=? WHERE id_moto=?');
        $query->execute(array($nombre,$imagen,$descripcion,$cilindrada,$precio,$idFk,$id));
        }
    }

    public function insertBike($nombre,$imagen,$descripcion,$cilindrada,$precio,$idFk){
        $pathImg = null;
        if($imagen){
        $pathImg = $this->uploadImage($imagen);
        $query = $this->db->prepare('INSERT INTO motos (nombre,imagen,descripcion,cilindrada,precio,id_marca_fk) VALUES (?,?,?,?,?,?)');
        $query->execute(array($nombre,$pathImg,$descripcion,$cilindrada,$precio,$idFk));
    }else{
        $query = $this->db->prepare('INSERT INTO motos (nombre,descripcion,cilindrada,precio,id_marca_fk) VALUES (?,?,?,?,?)');
        $query->execute(array($nombre,$descripcion,$cilindrada,$precio,$idFk));
        }
    }

    private function uploadImage($imagen){
        $target = 'images/bikes/' . uniqid() . '.jpg';
        move_uploaded_file($imagen, $target);
        return $target;
    }

}
