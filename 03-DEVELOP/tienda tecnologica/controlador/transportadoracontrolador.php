<?php
include("../../modelo/transportadoramodelos.php");
$obj = new transportadora();
if($_POST){

    $obj->id_transportadora = $_POST['id_transportadora'];
    $obj->nombre_transportadora = $_POST['nombre_transportadora'];
    $obj->numero_telefono = $_POST['numero_telefono'];
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