<?php
class Conexion{
               

               private $servidor = "tiendatecnologica.mysql.database.azure.com";
               private $usuario = "tiendatecnologica";
               private $clave = "Tienda*123456";
               private $db = "tienda_tecnologica";


               public function conectando() {
                   $con = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->db) or die ("Error al conectar con el servidor");
                   return $con;
               }


}
$obj = new Conexion();
 if($obj->conectando()){
     echo "conectado al servidor";
 }

 ?>
