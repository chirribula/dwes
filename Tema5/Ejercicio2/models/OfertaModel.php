<?php
    class OfertaModel extends Database{
        private $id;
        private $titulo;
        private $imagen;
        private $descripcion;
        private $conn;

        
        public function __construct($titulo=null ,$descripcion=null,$imagen=null) {
            $this->conn= parent::conectaDB();
            if(isset($titulo)){
                $this->titulo=$titulo;
            }
            if(isset($descripcion)){
                $this->descripcion=$descripcion;
            }
            if(isset($imagen)){
                $this->imagen=$imagen;
            }
            
           
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
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

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

        public function getId() {
            return $this->id;
        }

    
        public function setId($id){
                $this->id = $id;
                return $this;
        }
        
        public function getOferta(){
            $consulta= $this->conn->query("Select * From oferta order by id DESC");
            return $consulta;
        }

        public function getOfertaByid($id){          
            $consulta= $this->conn->query("Select * From oferta WHERE id=$id");
            return $consulta;
        }
        
        public function insert(){
            $sql= "insert into oferta values(null,'{$this->getTitulo()}','{$this->getImagen()}', '{$this->getDescripcion()}');";
            $save= $this->conn->exec($sql);
            
            $result= FALSE;
            if($save){
                $result=true;
            }           
            return $result;
        }


        public function delete(){
            $sql= "DELETE FROM oferta WHERE id={$this->getId()};";
            $delete= $this->conn->exec($sql);
            
            $result= FALSE;
            if($delete){
                $result=true;
            }           
            return $result;
        }

        public function modificar($id){

            $sql= "UPDATE oferta SET titulo='{$this->getTitulo()}', descripcion='{$this->getDescripcion()}' ";
         
            if($this->getImagen() != null){
                $sql.=", imagen='{$this->getImagen()}' ";    //si no existe la imagen se sube, si no no
            }
            
            $sql.="WHERE id=$id";
            
            $save= $this->conn->exec($sql);
            
            $result= FALSE;
            if($save){
                $result=true;
            }           
            return $result;
        }
        
    }
    
?>