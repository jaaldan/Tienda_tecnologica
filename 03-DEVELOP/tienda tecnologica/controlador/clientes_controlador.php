<?php
include "../../modelo/clientes_modelos.php";
$obj = new Clientes();
if ($_POST) {

    $obj->id_cliente = $_POST['id_cliente'];
    $obj->id_rol = $_POST['id_rol'];
    $obj->nombres = $_POST['nombres'];
    $obj->apellidos = $_POST['apellidos'];
    $obj->id_tipo_documento = $_POST['id_tipo_documento'];
    $obj->numero_documento = $_POST['numero_documento'];
    $obj->correo = $_POST['correo'];
    $obj->numero_celulaar = $_POST['numero_celular'];
    $obj->direccion = $_POST['direccion'];
    $obj->clave = $_POST['clave'];
    $obj->estado = $_POST['estado'];
    $obj->imagen_cliente = $_FILES['imagen_cliente']['tmp_name'];

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
