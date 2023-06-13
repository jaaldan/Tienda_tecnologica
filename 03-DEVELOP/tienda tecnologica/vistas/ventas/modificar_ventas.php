<?php
include "../../conexion/conectar.php";
include "../../controlador/ventascontrolador.php";

$obj = new Ventas();
if ($_POST) {

    $obj->id_venta = $_POST['id_venta'];
    $obj->id_pago_venta = $_POST['id_pago_venta'];
    $obj->id_pedido_venta  = $_POST['id_pedido_venta'];
    $obj->fecha_venta = $_POST['fecha_venta'];
    $obj->hora_venta = $_POST['hora_venta'];
    $obj->valor_total_venta = $_POST['valor_total_venta'];
    $obj->estado_venta = $_POST['estado_venta'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query5 = "select * from ventas where id_venta = '$key' ";
$ejecuta5 = mysqli_query($c, $query5);
$arreglo5 = mysqli_fetch_array($ejecuta5);
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
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <title>Modificar Ventas</title>
</head>

<body>
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
           <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
          <br>
          <br>
          <h2>Modificar Ventas</h2>
        </div>
        <form action="" name="modificar_ventas" method="POST">
        <center>
            <table class="table table-striped table-hover table table-bordered table-sm shadow">
                <tr class="text-center align-middle">
                    <th class="text-center">
                        Codigo venta
                    </th>
                    <td class="text-center">
                        <input type="text" name="id_venta" id="id_venta" 
                        value="<?php echo $arreglo5[0] ?>" readonly maxlength="50" size="20">
                    </td>
                </tr>
                <tr class="text-center align-middle">
                    <th class="text-center">
                        Codigo pago
                    </th>
                    <td class="text-center">
                        <center><input type="text" name="id_pago_venta" id="id_pago_venta" 
                        value="<?php echo $arreglo5[1] ?>" readonly maxlength="50" size="20">
                    </td>
                </tr>
                <tr class="text-center align-middle">
                    <th class="text-center">
                        Codigo pedido
                    </th>
                    <td class="text-center">
                        <input type="text" name="id_pedido_venta" id="id_pedido_venta"
                        value="<?php echo $arreglo5[2] ?>" readonly maxlength="50" size="20">
                    </td>
                </tr>
                <tr class="text-center align-middle">
                    <th class="text-center">
                        Fecha
                    </th>
                    <td class="text-center">
                        <input type="tel" name="fecha_venta" id="fecha_venta"
                         value="<?php echo $arreglo5[3] ?>" maxlength="50" size="20">
                    </td>
                </tr>
                <tr class="text-center align-middle">
                    <th class="text-center">
                        Hora 
                    </th>
                    <td class="text-center">
                        <input type="tel" name="hora_venta" id="hora_venta" 
                        value="<?php echo $arreglo5[4] ?>"maxlength="50" size="20">
                    </td>
                </tr>
                <tr class="text-center align-middle">
                    <th class="text-center">
                        Valor Total
                    </th>
                    <td class="text-center">
                        <input type="tel" name="valor_total_venta" id="valor_total_venta"
                         value="<?php echo $arreglo5[5] ?>" maxlength="50" size="20">
                    </td>
                </tr>
                <tr class="text-center align-middle">
                    <th class="text-center">
                        Estado
                    </th>
                    <td class="text-center">
                        <select name="estado_venta" id="estado_venta">
                                <?php
                                    $query3 = "select * from ventas where id_venta = '$arreglo5[6]' ";
                                    $ejecuta3 = mysqli_query($c, $query3);
                                    $arreglo3 = mysqli_fetch_array($ejecuta3);
                                    echo $arreglo3[0];
                                ?>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                    </td>
                </tr>
            </table>
        </center>
            <a href="ventas.php" target="marco">
                <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
            </a>
                    <button type="submit" class="btn btn-primary" name="modifica"><i class="fa fa-check" aria-hidden="true">Modificar</i></button>
                </P>
        </form>
    </div>
</body>
</html>