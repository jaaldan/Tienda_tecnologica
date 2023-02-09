<?php
include("../../conexion/conectar.php");
include("../../controlador/ventascontrolador.php");

$obj = new Ventas();
if ($_POST) {

    $obj->id_venta = $_POST['id_venta'];
    $obj->id_pago = $_POST['id_pago'];
    $obj->id_pedido = $_POST['id_pedido'];
    $obj->fecha = $_POST['fecha'];
    $obj->hora = $_POST['hora'];
    $obj->valor_total = $_POST['valor_total'];
    $obj->estado = $_POST['estado'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from ventas where id_venta = '$key' ";
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
    <title>Ver Ventas</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
        <h2>Ver transportadora</h2>
        <br>
        <br>
        <br>
        <form action="" name="ver_ventas" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr class="table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id venta</center>
                            <center>
                        <td><input type="text" name="id_venta" id="id_venta" value="<?php echo $arreglo2[0] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
            </center>
            </tr>
            <tr>
                <th>
                    <center>Id pago</center>
                    <center>
                <td><input type="text" name="id_pago" id="id_pago" value="<?php echo $arreglo2[1]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                </center>
                </th>

            </tr>
            <tr>
                <th>
                    <center>Id pedido</center>
                    <center>
                <td><input type="text" name="id_pedido" id="id_pedido" value="<?php echo $arreglo2[2]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                </center>
                </th>
            </tr>
            <tr>
                <th>
                    <center>Fecha</center>
                    <center>
                <td><input type="text" name="fecha" id="fecha" value="<?php echo $arreglo2[3]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                </center>
                </th>
            </tr>
            <tr>
                <th>
                    <center>Hora</center>
                    <center>
                <td><input type="text" name="hora" id="hora" value="<?php echo $arreglo2[4]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                </center>
                </th>
            </tr>
            <tr>
                <th>
                    <center>Valor total</center>
                    <center>
                <td><input type="text" name="valor_total" id="valor_total" value="<?php echo $arreglo2[5]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                </center>
                </th>
            </tr>
            <tr>
                <th>
                    <center>Estado</center>
                    <center>
                <td><input type="text" name="estado" id="estado" value="<?php echo $arreglo2[6]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                </center>
                </th>
            </tr>
            </table>
            <br>
            <a href="ventas.php" target="marco">
                <P align="center"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fa fa-times" aria-hidden="true">Cerrar</i></button></P>
            </a>
            </P>
            </center>
        </form>
    </div>
</body>

</html>