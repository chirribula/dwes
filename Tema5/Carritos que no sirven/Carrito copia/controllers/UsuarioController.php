<?php

require_once("models/UsuarioModel.php");

class UsuarioController{

    
    public function index(){
        require_once("views/layout/contenido.php");
    }

    
    public function IniciarSesion(){
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;
        $errores=array();

        if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errores['email']="El campo email no es válido";
        }
        if(empty($password)){
            $errores['password']="El campo contraseña está vacío";
        }
        if(count($errores)==0){ 

            $usuario = new UsuarioModel();
            $comoprobarUsuario = $usuario -> loguearte($email,$password);

            $user = $comoprobarUsuario -> fetchObject();

            if($user->email==$email && $user->password == $password){

                if($user->rol=='admin'){
                    $_SESSION['admin']=true;
                }else{
                    $_SESSION['admin']=false;
                }

                $_SESSION['user']=$user;
                require_once('views/usuario/VistaTienda.phtml'); 

            }
         }else{
            $_SESSION['errores']=$errores;
            require_once('views/usuario/VistaTienda.phtml');
        }

        require_once('views/usuario/VistaTienda.phtml');      

    }

    public function cerrarSesion(){
       session_destroy();
       $_SESSION['user']=null;
       $_SESSION['admin']=false;
    header("Location:index.php");
    }

}


   
   

    

?>
