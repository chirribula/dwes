<?php

    include_once 'Vehiculo.php';
    
    class Coche extends Vehiculo{
        
        private $cilindrada;
        
        public function __construct($cilindrada) {
            parent::__construct();
            $this->cilindrada = $cilindrada;
        }
        
        public function quemaRuedas(){
            return "Quemando las ruedas!!!!";
        }
    }