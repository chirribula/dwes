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

            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($password)){
                $_SESSION['loguearse'] = "El email o el correo no es válido";
                $errores="El email o el correo no es válido";
            }
            

            if (count($errores)==0) {
                $usuario = new UsuarioModel();
                $consulta = $usuario -> loguearte($email);
                $user = $consulta -> fetchObject(); 
                               
                 
                if($user){            
                    if($user->email==$email && $user->password == $password){
                
                        if($user->rol=='admin'){
                            $_SESSION['admin']=true;
                        }else{
                            $_SESSION['admin']=false;
                        }
                    $_SESSION['user']=$user;
                    $_SESSION['loguearse']="Se ha registrado correctamente";
                    header('Location:index.php');
                
                    }else{
                        $_SESSION['loguearse']="No existe ningún usuario registrado";
                        header('Location:index.php');      
                    }

                
                }
                else{
                    $_SESSION['loguearse']="El correo o la contraseña no son válidas";
                    header('Location:index.php');      
                }
       
            
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
