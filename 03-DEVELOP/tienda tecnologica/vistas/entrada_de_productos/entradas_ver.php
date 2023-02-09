<?php
include "../../conexion/conectar.php";
include "../../controlador/categoriascontrolador.php";

$obj = new Categorias();
if ($_POST) {

    $obj->id_categoria = $_POST['id_categoria'];
    $obj->nombre_categoria = $_POST['nombre_categoria'];
    $obj->estado_categoria = $_POST['estado_categoria'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from categorias where id_categoria = '$key' ";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>entradas ver</title>
</head>
<body>
  <div class="container shadow p-3 mb-5 bg-body rounded">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
          <h2 class="modal-title" id="exampleModalLabel">Ver Entrada</h2>
        </div>
                        <div>
                            <center>
                                <table
                                    class="table table-striped table table-bordered border-success table table-hover">
                                    <tr class="table-striped table table-bordered border-success table table-hover">
                                    <tr>
                                        <th>
                                            <center>Id Entrada</center>
                                            <center>
                                        <td>123</td>
                            </center>
                            </tr>
                            <tr>
                                <th>
                                    <center>Id Producto</center>
                                    <center>
                                <td>FDJFD45465</td>
                                </center>
                                </th>

                            </tr>
                            <tr>
                                <th>
                                    <center>Proveedor</center>
                                    <center>
                                <td>003</td>
                                </center>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <center>Cantidad Entrada</center>
                                    <center>
                                <td>01</td>
                                </center>
                                </th>
                            </tr>
                            </table>
                            <P align="right">
                            <P align="right"><button type="button" class="btn btn-secondary">
                                    <i class="fa fa-times" aria-hidden="true">Cerrar</i></button></P>
                            </P>
                            </center>
                        </div>
  </div>
</body>
</html>
