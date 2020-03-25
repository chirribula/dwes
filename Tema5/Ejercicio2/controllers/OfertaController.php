<?php

require_once "models/OfertaModel.php";

class OfertaController{

    public function index(){
        $oferta = new OfertaModel();
        $todasOfertas = $oferta -> getOferta();
        require_once("views/oferta/ListadoView.phtml");
    }

    public function NuevaOferta(){
        $oferta = new OfertaModel();
        $todasOfertas = $oferta -> getOferta();
        require_once('views/oferta/RegistroView.phtml');

    }


    public function GrabarOferta(){ 
        if(!isset($_POST['submit'])){
            require_once('views/oferta/RegistroView.phtml');
        }
        else{
            $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
           
            if(isset($_FILES['imagen'])){
                $file = $_FILES['imagen'];
                $filename =  $file['name'];
                $mimetype =  $file['type'];
        
                if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png"  ||$mimetype == "image/gif" ){
        
                    if(!is_dir('uploads/img')){
                        mkdir('uploads/img',0777, true);
                    }
                    move_uploaded_file($file['tmp_name'], 'uploads/img/'.$filename);
                }
            }

            if($titulo &&  $descripcion && $filename ){
                $oferta = new OfertaModel($titulo, $descripcion ,$filename);
                if(isset($_GET['id'])){      
                    $id=$_GET['id'];        //si existe el id modifica
                    $modificar = $oferta -> modificar($id);
                    
                    if($modificar){
                        $_SESSION['modificar'] = "complete";
                        $this->index();
                    }
                    else{
                        $_SESSION['modificar'] = "failed";
                    }
                    header('Location:index.php?c=Oferta&&a=index');
                }
                
                else{

                    $guardar = $oferta -> insert();    ///si no existe inserta

                    if($guardar){
                        $_SESSION['guardar'] = "complete";
                        $this->index();
                    }
                    else{
                        $_SESSION['guardar'] = "failed";
                    }
                    header('Location:index.php?c=Oferta&&a=index');
                    }                 
                }
                elseif($titulo && $descripcion){
                    $oferta = new OfertaModel($titulo, $descripcion);
                    
                    if(isset($_GET['id'])){      
                        $id=$_GET['id'];        //si existe el id modifica
                        $modificar = $oferta -> modificar($id);
                        
                        if($modificar){
                            $_SESSION['modificar'] = "complete";
                            $this->index();
                        }
                        else{
                            $_SESSION['modificar'] = "failed";
                        }
                        header('Location:index.php?c=Oferta&&a=index');
                    }
                    
                    else{   
                        $guardar = $oferta -> insert();    ///si no existe insertaº   
                        if($guardar){
                            $_SESSION['guardar'] = "complete";
                            $this->index();
                        }
                        else{
                            $_SESSION['guardar'] = "failed";
                        }
                        header('Location:index.php?c=Oferta&&a=index');
                        }                 
                    }
                    else{
                        $_SESSION['registro'] = "failed";
                    }
            }       
    }
  
    public function delete(){
            if(!isset($_GET['id'])){
                header('Location:index.php?c=Oferta&&a=index'); 
            }
            else{
                $id = $_GET['id'];        
                if($id){
                    $oferta = new OfertaModel();
                    $borrar = $oferta->setId($id);                  
                    $borrar = $oferta -> delete();

                    if($borrar){
                        $_SESSION['borrado'] = "complete";
                        $this->index();
                    }
                    else{
                        $_SESSION['borrado'] = "failed";
                    }
                }
                else{
                    $_SESSION['borrado'] = 'failed';
                }
         
        }
    }

    public function modificar(){
        if(!isset($_GET['id'])){
            header('Location:index.php?c=Oferta&&a=index'); 
        }
        else{
            $id = $_GET['id'];                  
            $oferta = new OfertaModel();
            $miOferta = $oferta->getOfertaByid($id);                  
            require_once "views/oferta/Registroview.phtml";                
        }
    }
}


   
   

    

?>
