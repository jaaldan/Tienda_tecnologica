<?php
include('../../modelo/productosmodelo.php');
$obj = new productos();
if($_POST){

    $obj->id_producto = $_POST['id_producto'];
    $obj->nombre_producto = $_POST['nombre_producto'];
    $obj->id_categoria = $_POST['id_categoria'];
    $obj->marca = $_POST['marca'];
    $obj->color = $_POST['color'];
    $obj->pvp_con_iva = $_POST['pvp_con_iva'];
    $obj->salidas = $_POST['salidas'];
    $obj->cantidad_stock = $_POST['cantidad_stock'];
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