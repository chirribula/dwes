<?php

    include_once 'Vehiculo.php';
    
    class Bicicleta extends Vehiculo{
        
        private $piñones;
        
        public function __construct($piñones) {
            parent::__construct();
            $this->piñones = $piñones;
        }
        
        public function hazCaballito(){
            return "Hice el caballito y me caí por tonto!!!";
        }
    }