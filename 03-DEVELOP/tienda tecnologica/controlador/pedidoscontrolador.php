<?php
include('../../modelo/pedidosmodelo.php');
$obj = new pedidos();
if($_POST){

    $obj->id_pedido = $_POST['id_pedido'];
    $obj->id_cliente = $_POST['id_cliente'];
    $obj->direccion = $_POST['direccion'];
    $obj->fecha = $_POST['fecha'];
    $obj->estado = $_POST['estado'];
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