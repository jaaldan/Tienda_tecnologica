<?php
include("../../modelo/ventasmodelos.php");
$obj = new ventas();
if($_POST){

    $obj->id_venta= $_POST['id_venta'];
    $obj->id_pago_ventas = $_POST['id_pago_ventas'];
    $obj->id_pedido_ventas = $_POST['id_pedido_ventas'];
    $obj->fecha_ventas = $_POST['fecha_ventas'];
    $obj->hora_ventas = $_POST['hora_ventas'];
    $obj->valor_total_ventas = $_POST['valor_total_ventas'];
    $obj->estado_ventas = $_POST['estado_ventas'];

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