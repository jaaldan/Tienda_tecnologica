<?php
include("../../conexion/conectar.php");
include("../../controlador/transportadoracontrolador.php");

$obj = new transportadoras();
if ($_POST) {

    $obj->id_transportadora = $_POST['id_transportadora'];
    $obj->nombre_transportadora = $_POST['nombre_transportadora'];
    $obj->numero_telefono_transportadora = $_POST['numero_telefononumero_transportadora'];
    $obj->estado_transportadora = $_POST['estado_transportadora'];
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
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
      <div>
         <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
        <br>
        <br>
        <h2>Datos transportadora</h2>
      <div>
        <form action="" name="ver_transportadora" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Id transportadora
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_transportadora" id="id_transportadora"
                            value="<?php echo $arreglo2[0]?>" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombre empresa transportadora
                        </th>
                        <td class="text-center">
                            <input type="text" name="nombre_transportadora" id="nombre_transportadora" 
                            value="<?php echo $arreglo2[1]?>" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Telefono
                        </th>
                        <td class="text-center">
                            <input type="text" name="numero_telefono_transportadora" id="numero_telefono_transportadora"
                            value="<?php echo $arreglo2[2]?>" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>
                        <td class="text-center">
                            <input type="text" name="estado" id="estado"
                            value="<?php echo $arreglo2[3]?>" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                </table>
                <br>
                <a href="transportadora.php" target="marco">
                    <P align="center"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a> 
                        <button type="button" class="btn btn-primary" name="imprimir" onClick="window.print()"><i class="fa fa-check" aria-hidden="true">Imprimir</i></button>
                    </P>
                
            </center>
        </form>
    </div>
</body>
</html>