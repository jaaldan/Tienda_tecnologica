<?php
include("../../conexion/conectar.php");
include("../../controlador/envio_controlador.php");

$obj = new Envios();
if ($_POST) {

    $obj->id_envio = $_POST['id_envio'];
    $obj->id_transportadora_envio = $_POST['id_transportadora_envio'];
    $obj->direccion_envio = $_POST['direccion_envio'];
    $obj->estado_envio = $_POST['estado_envio'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from envios where id_envio = '$key' ";
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
    <title>envios ver</title>
</head>

<body>
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
            <br>
            <br>
            <h2>Datos del Envio</h2>
        </div>
        <form action="" name="envio_agregar" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo envio
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_envio" id="id_envio"
                            value="<?php echo $arreglo2[0] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo transportadora
                        </th>
                            <td class="text-center">
                               <input type="text" name="id_transportadora" id="id_transportadora" 
                                value="<?php echo $arreglo2[1] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                            </td>
                        </tr>
                        <tr class="text-center align-middle">
                            <th class="text-center">
                                Direccion
                            </th>
                            <td class="text-center">
                                <input type="text" name="direccion" id="direccion" 
                                value="<?php echo $arreglo2[2] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                            </td>
                        </tr>
                        <tr class="text-center align-middle">
                            <th class="text-center">
                                Estado
                            </th>
                            <td class="text-center">
                                <input type="text" name="estado" id="estado"
                                value="<?php echo $arreglo2[3] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                            </td>
                        </tr>
                        <tr class="text-center align-middle">
                            <th class="text-center">
                                Fecha
                            </th>
                            <td class="text-center">
                                <input type="text" name="fecha" id="fecha"
                                value="<?php echo $arreglo2[2] ?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                            </td>
                        </tr>
                </table>
            </center>
                <a href="envios.php" target="marco">
                  <P align="right"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="button" class="btn btn-primary" name="imprimir" onClick="window.print()"><i class="fa fa-check" aria-hidden="true">Imprimir</i></button>
                </p>
        </form>
        
    </div>
</body>
</html>