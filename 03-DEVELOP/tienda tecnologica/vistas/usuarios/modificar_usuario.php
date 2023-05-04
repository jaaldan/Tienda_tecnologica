<?php
include "../../conexion/conectar.php";
include "../../controlador/usuariocontrolador.php";

$obj = new Usuarios();
if ($_POST) {

    $obj->id_usuario = $_POST['id_usuario'];
    $obj->id_rol_usuario = $_POST['id_rol_usuario'];
    $obj->nombres_usuario = $_POST['nombres_usuario'];
    $obj->apellidos_usuario = $_POST['apellidos_usuario'];
    $obj->id_tipo_documento_usuario = $_POST['id_tipo_documento_usuario'];
    $obj->numero_documento_usuario = $_POST['numero_documento_usuario'];
    $obj->correo_usuario = $_POST['correo_usuario'];
    $obj->numero_celular_usuario = $_POST['numero_celular_usuario'];
    $obj->direccion_usuario = $_POST['direccion_usuario'];
    $obj->clave_usuario = $_POST['clave_usuario'];
    $obj->estado_usuario = $_POST['estado_usuario'];
    $obj->imagen_usuario = $_POST['imagen_usuario'];

}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from usuarios where nombres = '$key' ";
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
    <title>Modificar Usuario</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
        <h2>Modificar Usuario</h2>
        <br>
        <br>
        <br>
        <form action="" name="modificar_usuario" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id Usuario</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_usuario" id="id_usuario"value="<?php echo $arreglo2[0] ?>" placeholder="El Codigo es Asignado por el Sistema"  maxlength="50" size="20"readonly></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Rol</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_rol" id="id_rol"value="<?php echo $arreglo2[1] ?>" placeholder="Seleccione un Rol"  maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombres</center>
                        </th>
                        <td>
                            <center><input type="text"  name="nombres" id="nombres" value="<?php echo $arreglo2[2] ?>" placeholder="Digite el Nombre del usuario"  maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Apellidos</center>
                        </th>
                        <td>
                            <center><input type="text"  name="apellidos" id="apellidos" value="<?php echo $arreglo2[3] ?>" placeholder="Digite el apellido del usuario"  maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Tipo De Documento</center>
                        </th>
                        <td>
                            <center><input type="text"  name="id_tipo_documento" id="id_tipo_documento" value="<?php echo $arreglo2[4] ?>" placeholder="Seleccione tipo de documento"  maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Numero De Documento</center>
                        </th>
                        <td>
                            <center><input type="text"  name="numero_documento" id="numero_documento" value="<?php echo $arreglo2[5] ?>" placeholder="Digite numero de documento"  maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Correo Electronico</center>
                        </th>
                        <td>
                            <center><input type="text"  name="correo" id="correo" value="<?php echo $arreglo2[6] ?>" placeholder="Digite el correo electronico"  maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Telefono</center>
                        </th>
                        <td>
                            <center><input type="text"  name="numero_celular" id="numero_celular" value="<?php echo $arreglo2[7] ?>" placeholder="Digite el numero celular" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Direccion</center>
                        </th>
                        <td>
                            <center><input type="text"  name="direccion" id="direccion" value="<?php echo $arreglo2[8] ?>" placeholder="Digite la direccion" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Contraseña</center>
                        </th>
                        <td>
                            <center><input type="text"  name="clave" id="clave" value="<?php echo $arreglo2[9] ?>" placeholder="digite la contraseña"  maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><select name="estado" id="estado">

                            <?php
$query3 = "select * from usuario where nombres = '$arreglo2[10]' ";
$ejecuta3 = mysqli_query($c, $query3);
$arreglo3 = mysqli_fetch_array($ejecuta3);
echo $arreglo3[0];
?>
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
                            <center><input type="text"  name="imagen_usuario" id="imagen_usuario" value="<?php echo $arreglo2[11] ?>" placeholder="imagen"  maxlength="50" size="20"></center>
                        </td>
                    </tr>
                </table>
                <br>
                <a href="usuarios.php" target="marco">
                    <P align="center"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <button type="submit"  class="btn btn-success" name="modifica" ><i class="fa fa-check" aria-hidden="true">Modificar</i></button>
                </P>
            </center>
        </form>
    </div>
</body>

</html>