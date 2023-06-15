<?php
class Conexion{
    private static function conectar(){        
        $host = "tiendatecnologica.mysql.database.azure.com";
        $usuario = 'admitilo';
        $contraseña = 'Tienda*123456';
        $basedatos = 'tienda_tecnologica';
        $puerto = 3306;
        $enlace = mysqli_init();        
        mysqli_ssl_set($enlace, NULL, NULL, "../db/DDL_db/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
        mysqli_real_connect($enlace, $host, $usuario, $contraseña, $basedatos, $puerto,NULL, MYSQLI_CLIENT_SSL);
        if ($enlace->connect_error) {
            die('Error de Conexión (' . $enlace->connect_errno . ') ' . $enlace->connect_error);
        }
        return $enlace;        
    }
    public static function consultar($query){
        if (!$consul = mysqli_query(Conexion::conectar(), $query)) {
            echo 'Error en la consulta SQL ejecutada';
        }
        return $consul;
    }



    // $enlace = mysqli_init();
    // mysqli_ssl_set($enlace, NULL, NULL, "../db/DDL_db/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    // // Establecer la conexión
    // mysqli_real_connect($enlace, $host, $usuario, $contraseña, $basedatos, $puerto,NULL, MYSQLI_CLIENT_SSL);

    // // Verificar si la conexión fue exitosa
    // if (mysqli_connect_errno()) {
    //     die("Error al conectar a la base de datos: " . mysqli_connect_error());
    // } else {
    //     echo "Conexión exitosa a la base de datos.";
    // }
    // // Aquí puedes realizar operaciones en la base de datos

    // // Cerrar la conexión
    // mysqli_close($enlace);
}

?>