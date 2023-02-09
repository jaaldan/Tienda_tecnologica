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
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from usuario where id_usuario = '$key' ";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Document</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
        <h2>Ver Usuario</h2>
        <br>
        <br>
        <br>
        <form action="" name="ver_usuario" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Id Usuario</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_usuario" id="id_usuario" value="<?php echo $arreglo2[0] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Rol</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_rol" id="id_rol" value="<?php echo $arreglo2[1] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombres</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombres" id="nombres" value="<?php echo $arreglo2[2] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Apellidos</center>
                        </th>
                        <td>
                            <center><input type="text" name="apellidos" id="apellidos" value="<?php echo $arreglo2[3] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Tipo Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_tipo_documento" id="id_tipo_documento" value="<?php echo $arreglo2[4] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Numero Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_documento" id="numero_documento" value="<?php echo $arreglo2[5] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Correo Electronico</center>
                        </th>
                        <td>
                            <center><input type="text" name="correo" id="correo" value="<?php echo $arreglo2[6] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Telefono</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_celular" id="numero_celular" value="<?php echo $arreglo2[7] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Direccion</center>
                        </th>
                        <td>
                            <center><input type="text" name="direccion" id="direccion" value="<?php echo $arreglo2[8] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Contraseña</center>
                        </th>
                        <td>
                            <center> <center><input type="text" name="clave" id="clave" value="<?php echo $arreglo2[9] ?>" readonly maxlength="50" size="20"></center></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center> <center><input type="text" name="estado" id="estado" value="<?php echo $arreglo2[10] ?>" placeholder="estado" readonly maxlength="50" size="20"></center></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Imagen</center>
                        </th>
                        <td>
                            <center> <center><input type="text" name="imagen_usuario" id="imagen_usuario" value="<?php echo $arreglo2[11] ?>" placeholder="imagen" readonly maxlength="50" size="20"></center></center>
                        </td>
                    </tr>
                </table>
                <br>
                <a href="usuarios.php" target="marco">
                    <P align="center"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fa fa-times" aria-hidden="true">Cerrar</i></button></P>
                </a>
            </center>
        </form>
    </div>
</body>

</html>