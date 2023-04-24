<?php
include "../../modelo/documentos_modelos.php";
$obj = new Documentos();
if ($_POST) {

    $obj->id_tipo_documento = $_POST['id_tipo_documento'];
    $obj->nombre_documento = $_POST['nombre_documento'];
    $obj->acronimo_documento = $_POST['acronimo_documento'];
    $obj->estado_documento = $_POST['estado_documento'];
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
