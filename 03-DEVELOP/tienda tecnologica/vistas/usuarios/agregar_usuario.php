<?php
include "../../conexion/conectar.php";
include "../../controlador/usuariocontrolador.php";

$obj = new Usuarios();
if ($_POST) {

    $obj->id_usuario = $_POST['id_usuario'];
    $obj->id_rol = $_POST['id_rol'];
    $obj->nombres = $_POST['nombres'];
    $obj->apellidos = $_POST['apellidos'];
    $obj->id_tipo_documento = $_POST['id_tipo_documento'];
    $obj->numero_documento = $_POST['numero_documento'];
    $obj->correo = $_POST['correo'];
    $obj->numero_celular = $_POST['numero_celular'];
    $obj->direccion = $_POST['direccion'];
    $obj->clave = $_POST['clave'];
    $obj->estado = $_POST['estado'];
    $obj->imagen_usuario = $_POST['imagen_usuario'];

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Agregar Usuario</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
        <h2>Agregar Usuario</h2>
        <br>
        <br>
        <br>
        <form action="" name="agregar_usuario" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr class="table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Codigo Usuario</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_usuario" id="id_usuario" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Rol</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_rol" id="id_rol" placeholder="seleccione un rol" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombres</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombres" id="nombres" placeholder="digite el nombre del usuario" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Apellidos</center>
                        </th>
                        <td>
                            <center><input type="text" name="apellidos" id="apellidos" placeholder="digite el apellido del uuario" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Tipo Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_tipo_documento" id="id_tipo_documento" placeholder="seleccione tipo de documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Numero Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_documento" id="numero_documento" placeholder="digite numero de documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Correo Electronico</center>
                        </th>
                        <td>
                            <center><input type="text" name="correo" id="correo" placeholder="digite el correo electronico" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Telefono</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_celular" id="numero_celular" placeholder="digite el numero" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Direccion</center>
                        </th>
                        <td>
                            <center><input type="text" name="direccion" id="direccion" placeholder="digite el numero" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Contraseña</center>
                        </th>
                        <td>
                            <center><input type="password" name="clave" id="clave" placeholder="digite la contraseña" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><select name="estado" id="estado">
                                    <option value="seleccionar">Seleccione</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                                </select></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Imagen</center>
                        </th>
                        <td>
                            <center><input type="file" name="imagen_usuario" id="imagen_usuario" placeholder="inserte imagen " maxlength="50" size="20"></center>
                        </td>
                    </tr>
                </table>
                <br>

                <P align="center">
                    <a href="usuarios.php"><button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button> </a>
                    <button type="submit" class="btn btn-success" name="guardar"><i class="fa fa-check" aria-hidden="true">Crear</i></button>

                </P>
            </center>
        </form>
    </div>
</body>

</html>
