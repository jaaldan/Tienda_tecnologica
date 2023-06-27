<?php
include ("../../modelo/envio_modelos.php");
$obj = new Envios();
if($_POST){

    $obj->id_envio = $_POST['id_envio'];
    $obj->id_transportadora_envio = $_POST['id_transportadora_envio'];
    $obj->direccion_envio = $_POST['direccion_envio'];
    $obj->estado_envio = $_POST['estado_envio'];
}

if(isset($_POST['guardar'])){
    echo "llegue";
    $obj->agregar();
}

if(isset($_POST['modifica'])){
    echo "llegue";
    $obj->modificar();
}
/*
if(isset($_POST['elimina'])){
    $obj->eliminar();
}
*/
if(isset($_POST['limpia'])){
    $obj->limpiar();
}




?>