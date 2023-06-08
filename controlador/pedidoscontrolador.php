<?php
include('../../modelo/pedidosmodelo.php');
$obj = new pedidos();
if($_POST){

    $obj->id_pedido = $_POST['id_pedido'];
    $obj->id_cliente_pedido = $_POST['id_cliente_pedido'];
    $obj->direccion_pedido = $_POST['direccion_pedido'];
    $obj->fecha_pedido = $_POST['fecha_pedido'];
    $obj->id_producto_detalle_pedido = $_POST['id_producto_detalle_pedido'];
    $obj->cantidad_producto_detalle_pedido = $_POST['cantidad_producto_detalle_pedido'];
    $obj->valor_iva_detalle_pedido = $_POST['valor_iva_detalle_pedido'];
    $obj->precio_venta_detalle_pedido = $_POST['precio_venta_detalle_pedido'];
    $obj->estado_pedido = $_POST['estado_pedido'];
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