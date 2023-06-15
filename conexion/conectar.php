<?php
class Conexion{
    private $servidor = "tiendatecnologica.mysql.database.azure.com";
    private $usuario = "admitilo";
    private $clave = "Tienda*123456";
    private $db = "tienda_tecnologica";


    public function conectando() {
        $con = mysqli_init();        
        mysqli_ssl_set($con, NULL, NULL, "../db/DDL_db/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
        mysqli_real_connect($con, $this->servidor,$this->usuario,$this->clave,$this->db, 3306,NULL, MYSQLI_CLIENT_SSL);
        
        // $con = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->db) or die ("Error al conectar con el servidor");
        // $con = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->db) or die ("Error al conectar con el servidor");
        if ($con->connect_error) {
            die('Error de Conexión (' . $con->connect_errno . ') ' . $con->connect_error);
        }
        return $con;
    }



// $obj = new Conexion();
// if($obj->conectando()){

// }


  
    // private static function conectando(){        
    //     $host = "tiendatecnologica.mysql.database.azure.com";
    //     $usuario = 'admitilo';
    //     $contraseña = 'Tienda*123456';
    //     $basedatos = 'tienda_tecnologica';
    //     $puerto = 3306;
    //     $enlace = mysqli_init();        
    //     mysqli_ssl_set($enlace, NULL, NULL, "../db/DDL_db/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    //     mysqli_real_connect($enlace, $host, $usuario, $contraseña, $basedatos, $puerto,NULL, MYSQLI_CLIENT_SSL);
    //     if ($enlace->connect_error) {
    //         die('Error de Conexión (' . $enlace->connect_errno . ') ' . $enlace->connect_error);
    //     }
    //     return $enlace;        
    // }
    // if (mysqli_connect_errno()) {
    //     die("Error al conectar a la base de datos: " . mysqli_connect_error());
    // } else {
    //     echo "Conexión exitosa a la base de datos.";
    // }
    // // Aquí puedes realizar operaciones en la base de datos

    // // Cerrar la conexión
    // mysqli_close($enlace);
    // public static function consultar($query){
    //     if (!$consul = mysqli_query(Conexion::conectando(), $query)) {
    //         echo 'Error en la consulta SQL ejecutada';
    //     }
    //     return $consul;
    // }



    // $enlace = mysqli_init();
    // mysqli_ssl_set($enlace, NULL, NULL, "../db/DDL_db/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    // // Establecer la conexión
    // mysqli_real_connect($enlace, $host, $usuario, $contraseña, $basedatos, $puerto,NULL, MYSQLI_CLIENT_SSL);

    // // Verificar si la conexión fue exitosa
}

?>