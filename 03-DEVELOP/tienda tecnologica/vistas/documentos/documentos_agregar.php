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
    <title>Documentos agregar</title>
</head>
<body>
  <div class="container shadow p-3 mb-5 bg-body rounded">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
          <h2>Agregar Documento</h2>
        </div>
            <form action="" name="agregar_documento" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id Tipo de Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_tipo_documento" id="id_tipo_documento" placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombre Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombre_documento" id="nombre_documento" placeholder="Digite el Nombre del documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Acronimo Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="acronimo_documento" id="acronimo_documento" placeholder="Digite el acronimo del documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><select name="estado_documento" id="estado_documento">
                                    <option value="seleccionar">Seleccione el estado</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                    </tr>
                </table>
                <a href="documentos.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="submit" class="btn btn-primary" name="guardar"><i class="fa fa-check" aria-hidden="true">Agregar</i></button>
                </P>
            </center>
        </form>
    </div>
</body>
</html>
