<?php
include "../../modelo/entradas_modelos.php";
$obj = new Entradas();
if ($_POST) {

    $obj->id_entrada = $_POST['id_entrada'];
    $obj->id_producto = $_POST['id_producto'];
    $obj->proveedor = $_POST['proveedor'];
    $obj->cantidad_entrada = $_POST['cantidad_entrada'];
    $obj->valor_proveedor = $_POST['valor_proveedor'];

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
