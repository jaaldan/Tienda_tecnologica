<?php
include("../../conexion/conectar.php");
include("../../controlador/transportadoracontrolador.php");

$obj = new transportadoras();
if ($_POST) {

    $obj->id_transportadora = $_POST['id_transportadora'];
    $obj->nombre_transportadora = $_POST['nombre_transportadora'];
    $obj->numero_telefono_transportadora = $_POST['numero_telefono_transportadora'];
    $obj->estado_transportadora = $_POST['estado_transportadora'];
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
    <title>Agregar Transportadora</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
        <h2>Agregar transportadora</h2>
        <br>
        <br>
        <form action="" name="agregar_transportadora" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr class="table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id transportadora</center>
                        </th>
                        <td>
                            <center><input type="text"name="id_transportadora" id="id_transportadora" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombre empresa transportadora</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombre_transportadora" id="nombre_transportadora" placeholder="Digite el Nombre de la transportadora" maxlength="50" size="20"></center>
                        </td>
                    <tr>
                        <th>
                            <center>Telefono</center>
                        </th>
                        <td>
                            <center><input type="text"name="numero_telefono_transportadora" id="numero_telefono_transportadora" placeholder="Digite el numero de telefono" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><select name="estado_transportadora" id="estado_transportadora">
                                    <option value="seleccionar">Seleccione el estado</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                    </tr>
                    </tr>
                </table>
                <br>
                <a href="transportadora.php" target="marco">
                    <P align="center"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <button type="submit" class="btn btn-success" name="guardar"><i class="fa fa-truck" aria-hidden="true">Agregar</i></button>
                </P>
            </center>
        </form>
    </div>
</body>

</html>