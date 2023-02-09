<?php
include("../../modelo/envio_modelos.php");
$obj = new envio();
if($_POST){

    $obj->id_envio = $_POST['id_envio'];
    $obj->id_transportadora = $_POST['id_transporadora'];
    $obj->direccion = $_POST['direccion'];
    $obj->estado = $_POST['estado'];
}

if(isset($_POST['guardar'])){
    
    $obj->agregar();
}

if(isset($_POST['modifica'])){
    echo "llegue";
    $obj->modificar();
}

if(isset($_POST['elimina'])){
    $obj->eliminar();
}
if(isset($_POST['limpia'])){
    $obj->limpiar();
}




?>