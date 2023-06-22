<?php
include("../../conexion/conectar.php");
include("../../controlador/transportadoracontrolador.php");

$obj = new Transportadoras();
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
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
      <div>
        <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
        <br>
        <br>
        <h2>Agregar transportadora</h2>
      </div>
        <form action="" name="agregar_transportadora" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                    <tr>
                        <th class="text-center">
                            Id transportadora
                        </th>
                        <td class="text-center">
                            <input type="text"name="id_transportadora" id="id_transportadora" 
                            placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombre empresa transportadora
                        </th>
                        <td class="text-center">
                            <input type="text" name="nombre_transportadora" id="nombre_transportadora"
                            placeholder="Digite el Nombre de la transportadora" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Telefono
                        </th>
                        <td class="text-center">
                            <input type="text"name="numero_telefono_transportadora" id="numero_telefono_transportadora" 
                            placeholder="Digite el numero de telefono" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>
                        <td class="text-center">
                            <select name="estado_transportadora" id="estado_transportadora">
                                    <option value="seleccionar">Seleccione el estado</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                    </tr>
                </table>
            </center>
                <a href="transportadora.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                    <button type="submit" class="btn btn-primary" name="guardar"><i class="fa fa-check" aria-hidden="true">Crear</i></button>
                </P>
        </form>
    </div>
</body>

</html>