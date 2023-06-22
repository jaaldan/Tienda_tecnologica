<?php
    class Conexion{
        
        private static $instance;

        private static function conectar(){

            $host = 'dbtiendatecnologica.mysql.database.azure.com';
            $username = 'albeiro_admin';
            $password = 'Earv1234';
            $db_name = 'tienda_tecnologica';
            $port = 3306;
            $ssl = "../../conexion/DigiCertGlobalRootCA.crt.pem";

            $conn = mysqli_init(); 
            mysqli_ssl_set($conn, NULL, NULL, $ssl, NULL, NULL);
            mysqli_real_connect($conn, $host, $username, $password, $db_name, $port);

            if ($conn->connect_error) {
                die('Error de Conexión (' . $conn->connect_errno . ') ' . $conn->connect_error);
            }

            return $conn;
        }

        public static function conectando(){
            if (!self::$instance) {
                self::$instance = self::conectar();
            }
            return self::$instance;
        }
    }
?>