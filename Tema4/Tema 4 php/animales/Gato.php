<?php

    include_once 'Animal.php';
    
    class Gato extends Animal{
        
        private $raza;
        
        public function __construct($sexo, $raza = "Siames") {
            parent::__construct($sexo);
            $this->raza = $raza;
        }
        
        public function setRaza($raza2){
            $this->raza = $raza2;
        }
        
        public function getRaza(){
            return $this->raza;
        }
        
        public function __toString() {
            return parent::__toString()."<br>Raza: $this->raza ";
        }
        
        public function comer($comida){
            if($comida != "pescado"){
                return "Solo como pescado soy un gato.";
            }else{
                return "Mmmm gracias.";
            }
        }
    }