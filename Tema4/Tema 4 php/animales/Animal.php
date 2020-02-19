<?php
    
    abstract class Animal{
        
        private $sexo;
        
        public function __construct($sexo = "Macho") {
            $this->sexo = $sexo;
        }
        
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
        
        public function getSexo(){
            return $this->sexo;
        }
        
        public function __toString() {
            return "Sexo: $this->sexo ";
        }
        
        public function aseate(){
            return "Me aseo";
        }
    }