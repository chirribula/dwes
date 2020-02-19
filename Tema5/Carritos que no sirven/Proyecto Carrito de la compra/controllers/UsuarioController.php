<?php

require_once("models/UsuarioModel.php");

class UsuarioController{

    
    public function index(){
        require_once("views/layout/aside.php");
    }

    
    public function IniciarSesion(){
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        $usuario = new UsuarioModel();
        $unUsuario = $usuario -> loguearte($email,$password);

        $usuario = $unUsuario -> fetchObject();
        $rol = $usuario -> rol  ;

         if($rol == 'admin'){
             $_SESSION['admin']=true;
         }else{
            $_SESSION['admin']=false;
         }
        $_SESSION['user']=$usuario;

        require_once('views/usuario/VistaTienda.phtml');      

    }

    public function cerrarSesion(){
       session_destroy();
       unset($_SESSION['admin']);
       unset($_SESSION['user']);
       $_SESSION['admin']=false;
       $_SESSION['user']=null;

        header("Location:index.php");
    }

}


   
   

    

?>
