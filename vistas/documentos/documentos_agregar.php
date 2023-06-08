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
  <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
        <br>
        <br>
          <h2>Agregar Documento</h2>
        </div>
            <form action="" name="documentos_agregar" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_tipo_documento" id="id_tipo_documento"
                            placeholder="El Codigo es Asignado por el Sistema" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombre Documento
                        </th>
                        <td class="text-center">
                            <input type="text" name="nombre_documento" id="nombre_documento"
                            placeholder="Digite el Nombre del documento" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Acronimo Documento
                        </th>
                        <td class="text-center">
                            <input type="text" name="acronimo_documento" id="acronimo_documento" 
                            placeholder="Digite el acronimo del documento" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>
                        <td class="text-center">
                            <select name="estado_documento" id="estado_documento">
                                    <option value="seleccionar">Seleccione el estado</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <a href="documentos.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <a href="documentos.php" target="marco">
                 <button type="submit" class="btn btn-primary" name="guardar"><i class="fa fa-check" aria-hidden="true">Agregar</i></button>
                </a>
                    </P>
            </center>
        </form>
    </div>
</body>
</html>
