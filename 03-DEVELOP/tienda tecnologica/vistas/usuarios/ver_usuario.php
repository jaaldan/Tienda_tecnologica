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
    $obj->clave_usuario_usuario = $_POST['clave_usuario_usuario'];
    $obj->estado_usuario = $_POST['estado_usuario'];
    $obj->imagen_usuario = $_POST['imagen_usuario'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from usuarios where id_usuario = '$key' ";
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
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
        <br>
        <br>
        <h2>Ver Usuario</h2>
    </div>
        <form action="" name="ver_usuario" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Id Usuario
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_usuario" id="id_usuario"
                            value="<?php echo $arreglo2[0] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Rol
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_rol" id="id_rol"
                             value="<?php echo $arreglo2[1] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center align-middle">
                            Nombres
                        </th>
                        <td class="text-center">
                            <input type="text" name="nombres" id="nombres"
                            value="<?php echo $arreglo2[2] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Apellidos
                        </th>
                        <td class="text-center">
                            <input type="text" name="apellidos" id="apellidos"
                             value="<?php echo $arreglo2[3] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Tipo Documento
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_tipo_documento" id="id_tipo_documento"
                            value="<?php echo $arreglo2[4] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Numero Documento
                        </th>
                        <td class="text-center">
                            <input type="text" name="numero_documento" id="numero_documento"
                            value="<?php echo $arreglo2[5] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Correo Electronico
                        </th>
                        <td class="text-center">
                            <input type="text" name="correo" id="correo"
                             value="<?php echo $arreglo2[6] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Telefono
                        </th>
                        <td class="text-center">
                            <input type="text" name="numero_celular" id="numero_celular"
                            value="<?php echo $arreglo2[7] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Direccion
                        </th>
                        <td class="text-center">
                            <input type="text" name="direccion" id="direccion"
                            value="<?php echo $arreglo2[8] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Contraseña
                        </th>
                        <td class="text-center">
                            <input type="text" name="clave" id="clave"
                             value="<?php echo $arreglo2[9] ?>" readonly maxlength="50" size="20"></center></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>
                        <td class="text-center">
                            <input type="text" name="estado" id="estado"
                             value="<?php echo $arreglo2[10] ?>" placeholder="estado" readonly maxlength="50" size="20"></center></center>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Imagen
                        </th>
                        <td class="text-center">
                            <input type="text" name="imagen_usuario" id="imagen_usuario"
                            value="<?php echo $arreglo2[11] ?>" placeholder="imagen" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                </table>
            </center>
                <a href="usuarios.php" target="marco">
                <P align="right"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="button" class="btn btn-primary" name="imprimir" onClick="window.print()">
                    <i class="fa fa-check" aria-hidden="true">Imprimir</i></button>
                </P>
        </form>
    </div>
</body>

</html>