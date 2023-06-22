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
 if ($key > 0) {

    $cone = new conexion();
    $c = $cone->conectando();
    $query2 = "select * from categorias where id_categoria = '$key' ";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
    $obj->id_venta = $arreglo2[0];
    $obj->id_pago_venta = $arreglo2[1];
    $obj->id_pedido_venta = $arreglo2[2];
    $obj->fecha_venta = $arreglo2[3];
    $obj->hora_venta = $arreglo2[4];
    $obj->valor_total_venta = $arreglo2[5];
    $obj->estado_venta = $arreglo2[6];


 }
 else {
    $obj->id_venta = "";
    $obj->id_pago_venta = "";
    $obj->id_pedido_venta = "";
    $obj->fecha_venta = "";
    $obj->hora_venta = "";
    $obj->valor_total_venta = "";
    $obj->estado_venta = "";

 }

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
    <title>Eliminar Venta</title>
</head>

<body>
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
           <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
         <br>
         <br>
         <h2>Eliminar Venta</h2>
        </div>
        <form action="" name="eliminar_categoria" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                        <tr class="text-center align-middle">
                            <th class="text-center">
                            Código
                            </th>
                            <td class="text-center">
                            <input type="number" name="id_venta" id="id_venta" 
                            value="<?php echo $obj->id_venta ?>" readOnly >
                            </td>
                        </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo Pago
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_pago_venta" id="id_pago_venta" 
                            value="<?php echo $obj->id_pago_venta?>" readOnly>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo Pedido
                        </th>
                        <td class="text-center">
                          <input type="text" name="id_pedido_venta" id="id_pedido_venta" 
                          value="<?php echo $obj->id_pedido_venta ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Fecha
                        </th>
                        <td class="text-center">
                          <input type="text" name="fecha_venta" id="fecha_venta" 
                          value="<?php echo $obj->fecha_venta ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Hora
                        </th>
                        <td class="text-center">
                          <input type="text" name="hora_venta" id="hora_venta" 
                          value="<?php echo $obj->hora_venta ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Valor Total
                        </th>
                        <td class="text-center">
                          <input type="text" name="valor_total_venta" id="valor_total_venta" 
                          value="<?php echo $obj->valor_total_venta ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>
                        <td class="text-center">
                          <input type="text" name="estado_venta" id="estado_venta" 
                          value="<?php echo $obj->estado_venta ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                </table>
            </center>
                <a href="ventas.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <a href="ventas.php">
                    <button type="submit" class="btn btn-primary" name="elimina">Eliminar</button>
                </a>
                </P>
        </form>
    </div>
</body>
</html>