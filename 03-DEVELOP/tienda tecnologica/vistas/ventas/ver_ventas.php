<?php
include("../../conexion/conectar.php");
include("../../controlador/ventascontrolador.php");

$obj = new Ventas();
if ($_POST) {

    $obj->id_venta = $_POST['id_venta'];
    $obj->id_pago_venta = $_POST['id_pago_venta'];
    $obj->id_pedido_venta = $_POST['id_pedido_venta'];
    $obj->fecha_venta = $_POST['fecha_venta'];
    $obj->hora_venta = $_POST['hora_venta'];
    $obj->valor_total_venta = $_POST['valor_total_venta'];
    $obj->estado_venta = $_POST['estado_venta'];
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
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
           <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
         <br>
         <br>
         <h2>Ver transportadora</h2>
        </div>
        <form action="" name="ver_ventas" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Id venta
                        </th>   
                        <td class="text-center">
                            <input type="text" name="id_venta" id="id_venta"
                            value="<?php echo $arreglo2[0] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Id pago
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_pago_venta" id="id_pago_ventas"
                            value="<?php echo $arreglo2[1]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Id pedido
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_pedido_venta" id="id_pedido_venta" 
                            value="<?php echo $arreglo2[2]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Fecha
                        </th>
                        <td class="text-center">
                            <input type="text" name="fecha_venta" id="fecha_venta"
                            value="<?php echo $arreglo2[3]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Hora
                        </th>    
                        <td class="text-center">
                            <input type="text" name="hora_venta" id="hora_venta"
                            value="<?php echo $arreglo2[4]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Valor total
                        </th>  
                        <td class="text-center">
                            <input type="text" name="valor_total_venta" id="valor_total_venta"
                            value="<?php echo $arreglo2[5]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>    
                        <td class="text-center">
                            <input type="text" name="estado_venta" id="estado_venta"
                            value="<?php echo $arreglo2[6]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></td>
                        </td>
                    </tr>
                </table>
            </center>
                <a href="ventas.php" target="marco">
                 <P align="right"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="button" class="btn btn-primary" name="imprimir" onClick="window.print()"><i class="fa fa-check" aria-hidden="true">Imprimir</i></button>
                </P>
        </form>
    </div>
</body>

</html>