<?php

require_once("models/UsuarioModel.php");
class UsuarioController{
    public function index(){
        require_once('views/usuario/Principal.phtml');
    }

    public function TodosUsuarios(){
        $usuario = new UsuariosModel();
        $todosUsuarios = $usuario -> get_all();
        require_once("views/usuario/TodosUsuariosView.phtml");
    }
/*
    public function registro(){
        require_once('views/usuario/registro.php');
    }
*/
    public function save(){

        if(!isset($_POST['submit'])){
            require_once('views/usuario/registro.phtml');
        }
        
        else{
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if($nombre && $apellidos && $email && $password){
                $usuario = new UsuariosModel($nombre, $apellidos, $email, $password);

                $save = $usuario -> save();
                if($save){
                    $_SESSION['register'] = "complete";
                    header('Location:index.php?c=Usuario&&a=TodosUsuarios');
                }
                else{
                    $_SESSION['register'] = "failed";
                }
            }
            else{
                $_SESSION['register'] = 'failed';
            }

        }
       
    }

    
    public function delete(){
            if(!isset($_GET['userId'])){
                header('Location:index.php?c=Usuario&&a=TodosUsuarios'); 
            }
            else{
                $id = $_GET['userId'];        
                if($id){
                    $usuario = new UsuariosModel();
                    $borrar = $usuario->setId($id);                  
                    $borrar = $usuario -> delete();

                    if($borrar){
                        $_SESSION['borrado'] = "complete";
                        $this->index();
                    }
                    else{
                        $_SESSION['delete'] = "failed";
                    }
                }
                else{
                    $_SESSION['borrado'] = 'failed';
                }
         
        }
    }
}    

    

?>
