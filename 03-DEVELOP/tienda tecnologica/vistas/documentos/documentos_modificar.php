<?php
include "../../conexion/conectar.php";
include "../../controlador/documentos_controlador.php";

$obj = new Documentos();
if ($_POST) {

    $obj->id_tipo_documento = $_POST['id_tipo_documento'];
    $obj->nombre_documento = $_POST['nombre_documento'];
    $obj->acronimo_documento = $_POST['acronimo_documento'];
    $obj->estado_documento = $_POST['estado_documento'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query6 = "select * from tipo_documentos where id_tipo_documento = '$key' ";
$ejecuta6 = mysqli_query($c, $query6);
$arreglo6 = mysqli_fetch_array($ejecuta6);
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
    <title>Documentos modificar</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
          <h2 class="modal-title" id="exampleModalLabel">Modificar Documento</h2>
        </div>
            <form action="" name="modificar_documento" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_tipo_documento" id="id_tipo_documento" value="<?php echo $arreglo6[0] ?>" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombre Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombre_documento" id="nombre_documento"  value="<?php echo $arreglo6[1] ?>" placeholder="Digite el Nombre del documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Acronimo Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="acronimo_documento" id="acronimo_documento"  value="<?php echo $arreglo6[2] ?>" placeholder="Digite acronimo del documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><select name="estado" id="estado">
                                    <?php
$query7 = "select * from tipo_documentos where id_tipo_documento = '$arreglo6[3]' ";
$ejecuta7 = mysqli_query($c, $query7);
$arreglo7 = mysqli_fetch_array($ejecuta7);
echo $arreglo7[0];
?>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                    </tr>
                </table>
                <a href="documentos.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="submit" class="btn btn-primary" name="modifica"><i class="fa fa-check" aria-hidden="true">Modificar</i></button>
                </P>
            </center>
        </form>
    </div>
</body>
</html>

