<?php
include('../../modelo/pagosmodelo.php');
$obj = new pago();
if($_POST){

    $obj->id_pago = $_POST['id_pago'];
    $obj->metodo_pago = $_POST['metodo_pago'];
    $obj->estado_pago = $_POST['estado_pago'];
}

if(isset($_POST['guarda'])){
    $obj->agregar();
}

if(isset($_POST['modifica'])){
    $obj->modificar();
}

if(isset($_POST['elimina'])){
    $obj->eliminar();
}
if(isset($_POST['limpia'])){
    $obj->limpiar();
}




?>