<?php
include('../../modelo/productosmodelo.php');
$obj = new productos();
if($_POST){

    $obj->id_producto = $_POST['id_producto'];
    $obj->nombre_producto = $_POST['nombre_producto'];
    $obj->id_categoria_producto = $_POST['id_categoria_producto'];
    $obj->marca_producto = $_POST['marca_producto'];
    $obj->color_producto = $_POST['color_producto'];
    $obj->pvp_con_iva_producto = $_POST['pvp_con_iva_producto'];
    $obj->salidas_producto = $_POST['salidas_producto'];
    $obj->cantidad_stock_producto = $_POST['cantidad_stock_producto'];
    $obj->descripcion_producto = $_POST['descripcion_producto'];
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