<?php

require_once("models/CategoriaModel.php");
require_once('models/ProductoModel.php');

class CategoriaController{

      
    public function index() {
        Utils::identificar('admin');
        $categoria = new CategoriaModel;
        $categorias = $categoria->getAll();
        require_once 'views/categoria/categorias.php';
        
    }

    public function crear() {
        Utils::identificar('admin');
        require_once 'views/categoria/crear.php';
    }

    public function save() {
        Utils::identificar('admin');
        $crear = new CategoriaModel;
        $crear->save();
        $categorias=$crear->getAll();
        require_once 'views/categoria/categorias.php';
    }

    public function ver() {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $categoria = new CategoriaModel();              //obtener categoria
            $categoria->setId($id);
            $cate = $categoria->getOne();

            $productos = new ProductoModel();
            $productos->setCategoria_id($id);                //obtener productos
            $productos = $productos->getAllCategory();
           
        }
        require_once 'views/categoria/categoriasPorId.php';
    }

   
}
    


    ?>