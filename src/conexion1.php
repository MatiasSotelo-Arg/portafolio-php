<?php

class conexion{
     private $servidor ="localhost";
     private $usuario ="id21072602_portafolioms";
     private $pass = '@Miportafolio1';
     private $conexion;
 
    
     public function __construct(){
         try{
             $this->conexion = new PDO("mysql:host=$this->servidor;dbname=id21072602_proyectos",$this->usuario,$this->pass);
             $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
         }catch(PDOException $e){
             throw new Exception("Falla de Conexión: " . $e->getMessage());
         }
     }

    public function ejecutar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }
    public function consultar($sql){ 
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();

        return $sentencia->fetchAll();
    }


}

?>