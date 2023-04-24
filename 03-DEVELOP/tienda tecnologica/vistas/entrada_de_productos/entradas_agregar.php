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
<div class="container shadow p-3 mb-5 bg-body rounded">

        <head>
            <center><img src="../../img/logo_2_T_T.jpg" width="600px" height="150px" alt=""></center>
            <br>
            <br>
            <h2>Agregar Productos</h2>
        </head>
        <br>
        <br>
        <form action="" name="agregar_categoria" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id entrada</center>
                        </th>
                        <th>
                            <center>Id producto</center>
                        </th>
                        <th>
                            <center>Proveedor</center>
                        </th>
                        <th>
                            <center>Cantidad Entrada</center>
                        </th>
                        <th>
                            <center>Valor Provedor</center>
                        </th>
                        <th>
                            <center>Aciones</center>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <center><input type="text" name="id_entrada" id="id_entrada" maxlength="50" size="20"></center>
                        </td>
                        <td>
                            <center><input type="text" name="id_producto" id="id_producto" placeholder="Digite el codigo del producto" maxlength="50" size="20"></center>
                        </td>
                        <td>
                            <center><input type="text" name="proveedor" id="proeveedor" placeholder="Digite el Nombre del proveedor" maxlength="50" size="20"></center>
                        </td>
                        <td>
                            <center><input type="text" name="cantidad_entrada" id="cantidad_entrada" placeholder="Digite la cantidad" maxlength="50" size="20"></center>
                        </td>
                        <td>
                            <center><input type="text" name="valor_proveedor" id="valor_proveedor" placeholder="Digite el valor" maxlength="50" size="20"></center>
                        </td>
                        <td>
                        <center><button name="ver" class="btn btn-primary" type="button"><i class="fa fa-plus-circle" aria-hidden="true"> Mas</i></center>
                    </td>
                    </tr>

                </table>
                <a href="entradas.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="submit" class="btn btn-primary" name="guardar"><i class="fa fa-check" aria-hidden="true">Guaardar</i></button>
                </P>
            </center>
        </form>
</div>


</body>
</html>
