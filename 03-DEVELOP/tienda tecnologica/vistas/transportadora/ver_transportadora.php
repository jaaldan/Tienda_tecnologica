<?php
include("../../conexion/conectar.php");
include("../../controlador/transportadoracontrolador.php");

$obj = new transportadoras();
if ($_POST) {

    $obj->id_transportadora = $_POST['id_transportadora'];
    $obj->nombre_transportadora = $_POST['nombre_transportadora'];
    $obj->numero_telefono = $_POST['numero_telefononumero_transportadora'];
    $obj->estado = $_POST['estado_transportadora'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from transportadoras where id_transportadora = '$key' ";
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
    <title>Ver Transportadora</title>
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
        <form action="" name="agregar_transportadora" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr class="table-striped table table-bordered border-success table table-hover">
                        <th>
                            <center>Id transportadora</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_transportadora" id="id_transportadora" value="<?php echo $arreglo2[0]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombre empresa transportadora</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombre_transportadora" id="nombre_transportadora" value="<?php echo $arreglo2[1]?>" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Telefono</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_telefono_transportadora" id="numero_telefono_transportadora" value="<?php echo $arreglo2[2]?>" placeholder="digite el numero de telefono" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><input type="text" name="estado" id="estado" value="<?php echo $arreglo2[3]?>" placeholder="digite el estado" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                </table>
                <br>
                <a href="transportadora.php" target="marco">
                    <P align="center"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fa fa-times" aria-hidden="true">Cerrar</i></button></P>
                </a>
            </center>
        </form>
    </div>
</body>

</html>