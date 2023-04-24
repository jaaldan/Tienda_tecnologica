<?php
include "../../modelo/clientes_modelos.php";
$obj = new Clientes();
if ($_POST) {

    $obj->id_cliente = $_POST['id_cliente'];
    $obj->id_rol_cliente = $_POST['id_rol_cliente'];
    $obj->nombres_cliente = $_POST['nombres_cliente'];
    $obj->apellidos_cliente = $_POST['apellidos_cliente'];
    $obj->id_tipo_documento_cliente = $_POST['id_tipo_documento_cliente'];
    $obj->numero_documento_cliente = $_POST['numero_documento_cliente'];
    $obj->correo_cliente = $_POST['correo_cliente'];
    $obj->numero_celular_cliente = $_POST['numero_celular_cliente'];
    $obj->direccion_cliente = $_POST['direccion'];
    $obj->clave_cliente = $_POST['clave_cliente'];
    $obj->estado_cliente = $_POST['estado_cliente'];
    $obj->imagen_cliente = $_POST['imagen_cliente'];

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