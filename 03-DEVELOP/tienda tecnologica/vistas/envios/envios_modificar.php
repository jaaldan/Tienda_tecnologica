<?php
include("../../conexion/conectar.php");
include("../../controlador/envio_controlador.php");

$obj = new envio();
if ($_POST) {

    $obj->id_envio = $_POST['id_envio'];
    $obj->id_transportadora = $_POST['id_transportadora'];
    $obj->direccion = $_POST['direccion'];
    $obj->estado = $_POST['estado'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from envio where id_envio = '$key' ";
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
    <title>envios modificar</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
            <br>
            <br>
            <h2>Modificar Envio</h2>
        </div>
        <div>
            <form action="" name="envios_modificar" method="POST"></form>
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr class="table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id envio</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_envio" id="id_envio" value="<?php echo $arreglo2[0] ?>" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Id transportadora</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_transportadora" id="id_transportadora" value="<?php echo $arreglo2[1] ?>" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Direccion</center>
                        </th>
                        <td>
                            <center><input type="text" name="direccion" id="direccion " value="<?php echo $arreglo2[2] ?>" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><select name="estado" id="estado">
                                    <?php
                                    $query3 = "select * from transportadora where id_transportadora = '$arreglo2[3]' ";
                                    $ejecuta3 = mysqli_query($c, $query3);
                                    $arreglo3 = mysqli_fetch_array($ejecuta3);
                                    echo $arreglo3[0];
                                    ?>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                    </tr>
                </table>
            </center>
            <br>
            <h4 class="modal-title" id="exampleModalLabel">Información venta y envio</h4>
        </div>
        <div>
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr class="table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id venta</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_venta" id="id_venta" value="<?php echo $arreglo2[0] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Id envio</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_envio" id="id_envio" value="<?php echo $arreglo2[1] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Fecha</center>
                        </th>
                        <td>
                            <center><input type="text" name="fecha" id="fecha" value="<?php echo $arreglo2[3] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                </table>
                <a href="envios.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <button type="submit" name="modifica" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true">Modificar</i></button>
                </P>
            </center>
        </div>
    </div>
</body>

</html>