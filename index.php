<?php
include "conexion/conectar.php";
$obj = new Conexion();
if($obj->conectando()){
    echo "conectado...";
}