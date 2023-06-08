<?php
include('../../modelo/imagenesmodelo.php');
$obj = new imagenes();
if($_POST){

    $obj->id_imagen = $_POST['id_imagen'];
    $obj->id_producto_imagen = $_POST['id_producto_imagen'];
    $obj->imagen_producto = $_FILES['imagen_producto'];
}

if(isset($_POST['guarda'])){
    $obj->agregar();
}

if(isset($_POST['modifica'])){
    $obj->modificar();
}

if(isset($_POST['elimina'])){
    $obj->eliminar();
    return redirect()->to(url('../../imagenes/imagenes.php'));
}
if(isset($_POST['limpia'])){
    $obj->limpiar();
}




?>