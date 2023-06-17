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


//class Conexion{

//$host = 'tiendatecnologica.mysql.database.azure.com';
//$usuario = 'admitilo';
//$contraseña = 'Tienda*123456';
//$basedatos = 'tienda_tecnologica';
//$puerto = 3306;


//$enlace = mysqli_init();

// Establecer la conexión
//mysqli_real_connect($enlace, $host, $usuario, $contraseña, $basedatos, $puerto);

// Verificar si la conexión fue exitosa
//if (mysqli_connect_errno()) {
    //die("Error al conectar a la base de datos: " . mysqli_connect_error());
//} else {
//    echo "Conexión exitosa a la base de datos.";
//}
// Aquí puedes realizar operaciones en la base de datos

// Cerrar la conexión
//mysqli_close($enlace);
//}
?>


 