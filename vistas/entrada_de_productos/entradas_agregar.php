<?php
include "../../conexion/conectar.php";
include "../../controlador/entradas_controlador.php";

$obj = new Entradas();
if ($_POST) {

    $obj->id_entrada_producto = $_POST['id_entrada_producto'];
    $obj->id_producto_entrada = $_POST['id_producto_entrada'];
    $obj->proveedor_producto_entrada = $_POST['proveedor_producto_entrada'];
    $obj->cantidad_entrada_producto = $_POST['cantidad_entrada_producto'];
    $obj->valor_proveedor_entrada_producto = $_POST['valor_proveedor_entrada_producto'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from entradas_productos where id_entrada_producto = '$key' ";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
<div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
    <div>
        <head>
            <center><img src="../../img/logo_2_T_T.jpg" width="550px" height="110px" alt=""></center>
            <br>
            <br>
            <h2>Crear Entrada</h2>
        </head>
        <br>
        <br>
    </div>
        <form action="" name="entradas_agregar" method="POST">
         <label for="text">Codigo Entrada</label>
         <input type="text" name="id_entrada_producto" id="id_entrada_producto" placeholder="el codigo es asignado por el sistema" maxlength="50" size="20">
         <br>
         <br>
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo producto
                        </th>
                        <th class="text-center">
                            Nombre producto
                        </th>
                        <th class="text-center">
                            Proveedor
                        </th>
                        <th class="text-center">
                            Cantidad Entrada
                        </th>
                        <th class="text-center">
                            Valor Provedor
                        </th>
                        <th class="text-center">
                            Aciones
                        </th>
                    </tr>
                    <tr class="text-center align-middle">
                        <td class="text-center">
                            <input type="text" name="id_producto_entrada" id="id_producto_entrada" placeholder="Digite el codigo del producto" maxlength="50" size="20">
                        </td>
                        <td class="text-center">
                            <input type="text" name="proveedor_producto_entrada" id="proveedor_producto_entrada" placeholder="Digite el Nombre del producto" maxlength="50" size="20">
                        </td>
                        <td class="text-center">
                            <input type="text" name="proveedor" id="proeveedor" placeholder="Digite el Nombre del proveedor" maxlength="50" size="20">
                        </td>
                        <td class="text-center">
                            <input type="text" name="cantidad_entrada_producto" id="ccantidad_entrada_producto" placeholder="Digite la cantidad" maxlength="50" size="20">
                        </td>
                        <td class="text-center">
                            <input type="text" name="valor_proveedor_entrada_producto" id="valor_proveedor_entrada_producto" placeholder="Digite el valor" maxlength="50" size="20">
                        </td>
                        <td class="text-center">
                         <button name="ver" class="btn btn-primary" type="button"><i class="fa fa-plus-circle" aria-hidden="true"> Mas</i>
                        </td>
                    </tr>
                </table>
            </center>
                <a href="entradas.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <button type="submit" class="btn btn-primary" name="guardar"><i class="fa fa-check" aria-hidden="true">Guaardar</i></button>
                    </P>
        </form>
    </div>
</body>
</html>
