<?php
include("../../modelo/ventasmodelos.php");
$obj = new ventas();
if($_POST){

    $obj->id_venta= $_POST['id_venta'];
    $obj->id_pago = $_POST['id_pago'];
    $obj->id_pedido = $_POST['id_pedido'];
    $obj->fecha = $_POST['fecha'];
    $obj->hora = $_POST['hora'];
    $obj->valor_total = $_POST['valor_total'];
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