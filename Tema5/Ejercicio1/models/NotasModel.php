<?php
    class NotasModel extends Database{
        private $id;
        private $usuario_id;
        private $titulo;
        private $descripcion;
        private $fecha;
        private $conn;



        public function __construct($usuario_id=null,$titulo=null,$descripcion=null) {
            $this->conn= parent::conectaDB();
            if(isset($usuario_id)){
                $this->usuario_id=$usuario_id;
            }
            if(isset($titulo)){
                $this->titulo=$titulo;
            }
            if(isset($descripcion)){
                $this->descripcion=$descripcion;
            }
            
        }    

        /**
         * Get the value of usuario_id
         */ 
        public function getUsuario_id()
        {
                return $this->usuario_id;
        }

        /**
         * Set the value of usuario_id
         *
         * @return  self
         */ 
        public function setUsuario_id($usuario_id)
        {
                $this->usuario_id = $usuario_id;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        public function get_all(){
            $consulta= $this->conn->query("SELECT u.nombre, n.titulo, n.descripcion FROM notas n, usuarios u WHERE n.usuario_id=u.id AND n.usuario_id=u.id ");
            return $consulta;
        }

        public function get_all_Id(){
                $consulta= $this->conn->query("SELECT u.nombre, n.titulo, n.descripcion FROM notas n, usuarios u WHERE n.usuario_id={$this->getUsuario_id()} AND n.usuario_id=u.id");
                return $consulta;
            }

        
        
        public function save(){
                $sql= "insert into notas values(null,{$this->getUsuario_id()},'{$this->getTitulo()}', '{$this->getDescripcion()}', CURDATE());";
                $save= $this->conn->exec($sql);
                
                $result= FALSE;
                if($save){
                    $result=true;
                }           
                return $result;
            }


    }


?>