<?php
include "../../modelo/ventasmodelos.php";
$obj = new Ventas();
if ($_POST) {

    $obj->id_venta = $_POST['id_venta'];
    $obj->id_pago_venta = $_POST['id_pago_venta'];
    $obj->id_pedido_venta = $_POST['id_pedido_venta'];
    $obj->fecha_venta = $_POST['fecha_venta'];
    $obj->hora_venta = $_POST['hora_venta'];
    $obj->valor_total_venta = $_POST['valor_total_venta'];
    $obj->estado_venta = $_POST['estado_venta'];

}

if(isset($_POST['guardar'])){
    
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
if(isset($_POST['limpia'])){
    $obj->limpiar();
}
*/
?>