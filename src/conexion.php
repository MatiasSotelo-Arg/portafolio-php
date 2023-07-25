<?php 
    class conexion {
        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "HUaxhx-@_g0K[5jS";
        private $conexion; 
        private $base = "proyectos";
    
        
        public function __construct() {

            try {
                $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->base",$this->usuario,$this->password);

                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


            } catch(PDOException $e) {
                return "Falla en la conexión".$e;
            }

        }
    
        public function ejecutar($sql) {
            $this->conexion->exec($sql);
    
            return $this->conexion->lastInsertId();
        }
    
        public function consultar($sql) {
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
    
            return $sentencia->fetchAll();
        }

    }

    
?>