<?php
    class CategoriaModel extends Database{
        private $id;
        private $nombre;
        private $conn;
     
        public function __construct($nombre=null ) {
            $this->conn= parent::conectaDB();
            if(isset($nombre)){
                $this->$nombre=$nombre;
            }

        }


        /**
         * Get the value of nombresss
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getAll(){
                $consulta = $this->conn->query("Select * From categorias");
                return $consulta;
        }

        public function save() {
                if (isset($_POST) && isset($_POST['nombre'])) {
                    $nombre = $_POST['nombre'];
                    $sql = "INSERT INTO categorias VALUES (NULL, '$nombre'); ";
                    $guardar =$this->conn->query($sql);
                    $result = FALSE;
                    if($guardar){
                        $result = TRUE;
                    }
                     return $result;
                }
        }

        public function getOne() {
                $sql = "SELECT * FROM categorias WHERE id = {$this->getId()};";
                
                $categoria = $this->conn->query($sql);
                return $categoria->fetchObject();
        }
}
    
?>