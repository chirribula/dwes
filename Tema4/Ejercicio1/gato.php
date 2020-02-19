<?php
    include_once 'animal.php';

    class Gato extends Animal{
        private $raza;

        public function __construct($s,$r="Siamés")  
        {
            parent:: __construct($s);  
            $this->raza=$r;

        }


        public function getRaza(){
            return $this->raza;
        }
        
        public function setRaza($r){
            $this->raza =$r;      
        }

        
        public function __toString()
        {
           return parent::__toString()."Raza: $this->raza <br>"; 
        }

        public function comer($comida){
            if($comida == "pescado"){
                return "ummm que rico el pescado <br>";
            }else{
                return "no es pescado pero me como lo que sea (soy Thorsito) <br>";
            }
        }
    }

?>