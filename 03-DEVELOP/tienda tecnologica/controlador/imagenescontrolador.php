<?php
include('../../modelo/imagenesmodelo.php');
$obj = new imagenes();
if($_POST){

    $obj->id_imagen = $_POST['id_imagen'];
    $obj->id_producto = $_POST['id_producto'];
    $obj->url = $_FILES['url']['tmp_name'];
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