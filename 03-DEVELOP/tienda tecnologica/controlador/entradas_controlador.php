<?php
include "../../modelo/entradas_modelos.php";
$obj = new Entradas();
if ($_POST) {

    $obj->id_entrada_producto = $_POST['id_entrada_producto'];
    $obj->id_producto_entrada = $_POST['id_producto_entrada'];
    $obj->proveedor_producto_entrada = $_POST['proveedor_producto_entrada'];
    $obj->cantidad_entrada_producto = $_POST['cantidad_entrada_producto'];
    $obj->valor_proveedor_entrada_producto = $_POST['valor_proveedor_entrada_producto'];

}

if (isset($_POST['guardar'])) {

    $obj->agregar();
}

if (isset($_POST['modifica'])) {
    echo "llegue";
    $obj->modificar();
}

if (isset($_POST['elimina'])) {
    $obj->eliminar();
}
if (isset($_POST['limpia'])) {
    $obj->limpiar();
}
?>
