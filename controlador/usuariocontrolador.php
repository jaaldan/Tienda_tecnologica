<?php
include "../../modelo/usuariomodelos.php";
$obj = new Usuarios();
if ($_POST) {

    $obj->id_usuario = $_POST['id_usuario'];
    $obj->id_rol_usuario = $_POST['id_rol_usuario'];
    $obj->nombres_usuario = $_POST['nombres_usuario'];
    $obj->apellidos_usuario = $_POST['apellidos_usuario'];
    $obj->id_tipo_documento_usuario = $_POST['id_tipo_documento_usuario'];
    $obj->numero_documento_usuario = $_POST['numero_documento_usuario'];
    $obj->correo_usuario = $_POST['correo_usuario'];
    $obj->numero_celular_usuario = $_POST['numero_celular_usuario'];
    $obj->direccion_usuario = $_POST['direccion_usuario'];
    $obj->clave_usuario = $_POST['clave_usuario'];
    $obj->estado_usuario = $_POST['estado_usuario'];
    $obj->imagen_usuario = $_POST['imagen_usuario'];

}

if (isset($_POST['guardar'])) {
    echo "llegue";
    $obj->agregar();
}

if (isset($_POST['modifica'])) {
    echo "llegue";
    $obj->modificar();
}
