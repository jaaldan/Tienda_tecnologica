<?php
class Conexion{
               

               private $servidor = "tiendatecnologica.mysql.database.azure.com";
               private $usuario = "admitilo";
               private $clave = "Tienda*123456";
               private $db = "tienda_tecnologica";

               
               public function conectando() {
                 $conn = mysqli_init();
               mysqli_ssl_set($conn,NULL,NULL, "../db/DDL_db/DigiCertGlobalRootCA.crt.pem", NULL, NULL);

                   $conn = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->db) or die ("Error al conectar con el servidor");
                   return $conn;
               }


}
$obj = new Conexion();
 if($obj->conectando()){
     echo "conectado al servidor";
 }

 ?>
 <?php 
//$conn = mysqli_init();
//mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
//mysqli_real_connect($conn, 'mydemoserver.mysql.database.azure.com', 'myadmin', 'yourpassword', 'quickstartdb', 3306, MYSQLI_CLIENT_SSL);
//if (mysqli_connect_errno()) {
//die('Failed to connect to MySQL: '.mysqli_connect_error());
//}
?>