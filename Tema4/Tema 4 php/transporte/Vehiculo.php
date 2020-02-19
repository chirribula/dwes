<?php

    abstract class Vehiculo{
        
        private static $kmTotales;
        private static $vehiculosCreados = 0;
        private $kilometrosRecorridos = 0;
        
        public function __construct() {
            $this->kmTotales = 0;
            Vehiculo::$vehiculosCreados += 1;
        }
        
        public static function getKmTotales(){
            return Vehiculo::$kmTotales;
        }
        
        public static function getVehiculosCreados(){
            return Vehiculo::$vehiculosCreados;
        }
        
        public function getKmRecorridos(){
            return $this->kilometrosRecorridos;
        }
        
        public function recorre($km){
            $this->kilometrosRecorridos += $km;
            Vehiculo::$kmTotales += $km;
        }
    }

