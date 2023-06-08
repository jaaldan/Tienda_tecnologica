<?php
class Conexion{
               

               private $servidor = "tiendatecnologica.mysql.database.azure.com";
               private $usuario = "admitilo";
               private $clave = "Tienda*123456";
               private $db = "tienda_tecnologica";

               
               public function conectando() {
                 $conn = mysqli_init();
               mysqli_ssl_set($conn,NULL,NULL, "/db/DDL_db/DigiCertGlobalRootCA.crt.pem", NULL, NULL);

                   $conn = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->db) or die ("Error al conectar con el servidor");
                   return $conn;
               }


}
$obj = new Conexion();
 if($obj->conectando()){
     echo "conectado al servidor";
 }

 ?>
