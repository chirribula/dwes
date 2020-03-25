<?php

require_once 'models/ProductoModel.php';

class ProductoController {

    public function index() {
        $productos = new ProductoModel();
        $producto = $productos->getRandom(8);
        require_once 'views/producto/productosDestacados.php';
    }

    public function gestionar() {
        Utils::identificar('admin');
        $producto = new ProductoModel();
        $productos = $producto->getAll();
        require_once 'views/producto/gestionar.php';
    }

    public function crear() {
        Utils::identificar('admin');
        require_once 'views/producto/crear.php';
    }

    public function save() {
        Utils::identificar('admin');
                if ($_POST) {
                    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : FALSE;
                    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : FALSE;
                    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : FALSE;
                    $precio = isset($_POST['precio']) ? $_POST['precio'] : FALSE;
                    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : FALSE;
                    
                    if ($nombre && $categoria && $descripcion && $precio && $cantidad) {
                        $producto = new ProductoModel();
                        $producto->setNombre($nombre);
                        $producto->setCategoria_id($categoria);
                        $producto->setDescripcion($descripcion);
                        $producto->setPrecio($precio);
                        $producto->setStock($cantidad);
        
                        if (isset($_FILES)) {
                            $file = $_FILES['foto'];
                            $filename = $file['name'];
                            $filetype = $file['type'];
  
                            if ($filetype == "image/jpeg" || $filetype == "image/png" || $filetype == "image/jpg" || $filetype == "image/tiff" || $filetype == "image/gif") {
                                if (!is_dir('uploads/img')) {
                                    mkdir('uploads/img', 0777, true);
                                }
                                move_uploaded_file($file['tmp_name'], 'uploads/img/' . $filename);
                                $producto->setImagen($filename);                         
                            }
                        }
       
                        if (isset($_POST['id'])) {
                            $id = $_POST['id'];
                            $producto->setId($id);
                            $save = $producto->edit();

                            if ($save) {
                                $_SESSION['producto'] = "Producto modificado correctamente";
                            } else {
                                $_SESSION['producto'] = "El roducto no se ha modificado";
                            }
                     
                        } else {
                            $save = $producto->save();
                            if ($save) {
                                $_SESSION['producto'] = "Producto creado correctamente";
                            } else {
                                $_SESSION['producto'] = "El roducto no se ha creado";
                            }
                        }
                        
                    } else {
                        $_SESSION['producto'] = "El roducto no se ha modificado";
                    }
                } else {
                    $_SESSION['producto'] = "El roducto no se ha modificado";
                }
                $producto = new ProductoModel();
                $productos = $producto->getAll();
                require_once 'views/producto/gestionar.php';
            }

            function eliminarProducto(){
                Utils::identificar('admin');
                if(!isset($_GET['id'])){
                    require_once 'views/producto/gestionar.php';
                }else{
                    $id = $_GET['id'];
                    if($id){
                        $producto = new ProductoModel();
                        $producto->setId($id);
                        $borrado = $producto->delete();
                        if($borrado){
                            $_SESSION['remove'] = "Artículo borrado correctamente";
                            $producto = new ProductoModel();
                            $productos = $producto->getAll();
                            require_once 'views/producto/gestionar.php';
                      
                        }             
                    }
                }
            }

            public function editarProducto() {
                Utils::identificar('admin');
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $producto = new ProductoModel();
                    $producto->setId($id);
                    $pro = $producto->getOne(); 
                    require_once 'views/producto/crear.php';
                } 
                else {
                    require_once 'views/producto/gestionar.php';
                }
            }

            public function ver() {
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $producto = new ProductoModel();
                    $producto->setId($id);
                    $pro = $producto->getOne();
                    require_once 'views/producto/ver.php';
                } 
            }



}


    ?>