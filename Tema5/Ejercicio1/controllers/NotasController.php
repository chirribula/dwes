<?php

    require_once("models/NotasModel.php");
    require_once("models/UsuarioModel.php");

    
    class NotasController{
        public function index(){
            require_once('views/usuario/principal.phtml');
        }

        public function TodasNotas(){                       
                    $nota = new NotasModel();
                    $todasNotas = $nota -> get_all();
                    
                    require_once("views/notas/TodasNotasView.phtml");
              
        }

        public function notasUsuario(){   
            if(!isset($_GET['userId'])){
                require_once('views/usuario/TodosUsuariosView.phtml');
            }    
            else{
                $userId=$_GET['userId'];
                $nota = new NotasModel();
                $nota->setUsuario_id($userId);
                $todasNotasUser = $nota -> get_all_Id();
            
            require_once("views/notas/NotasUsuario.phtml");
            }                         
            
      
}


        public function crearNota(){

            if(!isset($_POST['submit'])){
                require_once('views/notas/insertarNotas.phtml');
            }
            
            else{
                $usuario_id = isset($_POST['usuario_id']) ? $_POST['usuario_id'] : false;
                $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
               

                if($usuario_id && $titulo && $descripcion){
                    $nota = new NotasModel($usuario_id, $titulo, $descripcion);
    
                    $save = $nota -> save();
                    if($save){
                        $_SESSION['guardado'] = "complete";                       
                    }
                    else{
                        $_SESSION['guardado'] = "failed";
                    }
                }
                else{
                    $_SESSION['guardado'] = 'failed';
                    
                }
            header('Location:index.php?c=Notas&&a=TodasNotas');    
            }
           
        }

    }


?>