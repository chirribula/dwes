<?php

require_once("models/UsuarioModel.php");

class UsuarioController{

    
    public function index(){
        require_once("views/layout/aside.php");
    }

    
    public function IniciarSesion(){
        if(isset($_POST['submit'])){
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $errores = array();

            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores['email'] = "El email no es válido";
            }
            if (empty($password)) {
                $errores['password']="El campo password esta vacio";
            }

            if (count($errores)==0) {
                $usuario = new UsuarioModel();
                $consulta = $usuario -> loguearte($email);
               
                if($consulta){
                    
                    $user = $consulta -> fetchObject();               
                    if($user->email==$email && $user->password == $password){
                
                        if($user->rol=='admin'){
                            $_SESSION['admin']=true;
                        }else{
                            $_SESSION['admin']=false;
                        }
                       $_SESSION['user']=$user;
                       header('vies/producto/productosDestacados.php');
                    }
                }else{
                    $_SESSION['errores']=$errores;
                    require_once('views/layout/aside.php');      
                }


                
            }
            else{
                $_SESSION['errores']=$errores;
                require_once('views/layout/aside.php');      
            }
       
            
        }
    }

    public function cerrarSesion(){
       session_destroy();
       $_SESSION['user']=null;
        header("Location:index.php");
    }

}


   
   

    

?>
