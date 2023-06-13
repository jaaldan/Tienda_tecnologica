<?php
class Conexion{
               

               private $servidor = "localhost";
               private $usuario = "root";
               private $clave = "";
               private $db = "tienda_tecnologica";


               public function conectando() {
                   $con = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->db) or die ("Error al conectar con el servidor");
                   return $con;
               }


}
$obj = new Conexion();
 if($obj->conectando()){
     
 }

 