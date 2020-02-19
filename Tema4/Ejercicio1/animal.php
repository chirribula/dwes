<?php
    abstract class Animal{
        private $sexo;


        public function __construct($s = "desconocido"){
            $this->sexo =$s; 
         
        }

        public function __toString(){
           return "Sexo: $this->sexo <br>"; 
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($s){
            $this->sexo =$s;      
        }


        public function duerme(){
            return "zzzzzzzzzz  <br>";
        }

        public function aseate(){
            return "Me gusta asearme, soy un animal. <br>";
        }

        



    }

?>