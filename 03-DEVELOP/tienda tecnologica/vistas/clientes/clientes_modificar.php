<?php
include "../../conexion/conectar.php";
include "../../controlador/clientes_controlador.php";

$obj = new Clientes();
if ($_POST) {

    $obj->id_cliente = $_POST['id_cliente'];
    $obj->id_rol_cliente = $_POST['id_rol_cliente'];
    $obj->nombres_cliente = $_POST['nombres_cliente'];
    $obj->apellidos_cliente = $_POST['apellidos_cliente'];
    $obj->id_tipo_documento_cliente = $_POST['id_tipo_documento_cliente'];
    $obj->numero_documento_cliente = $_POST['numero_documento_cliente'];
    $obj->correo_cliente = $_POST['correo_cliente'];
    $obj->numero_celular_cliente = $_POST['numero_celular_cliente'];
    $obj->direccion_cliente = $_POST['direccion'];
    $obj->clave_cliente = $_POST['clave_cliente'];
    $obj->estado_cliente = $_POST['estado_cliente'];
    $obj->imagen_cliente = $_POST['imagen_cliente'];

}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query3 = "select * from clientes where id_cliente = '$key' ";
$ejecuta3 = mysqli_query($c, $query3);
$arreglo3 = mysqli_fetch_array($ejecuta3);
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
    <title>clientes modificar</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
          <h2>Modificar cliente</h2>
        </div>
        <form action="" name="agregar_cliente" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Codigo</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_cliente" id="id_cliente"value="<?php echo $arreglo3[0] ?>" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Rol</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_rol" id="id_rol"value="<?php echo $arreglo3[1] ?>" placeholder="seleccione su rol" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombres</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombres" id="nombres"value="<?php echo $arreglo3[2] ?>" placeholder="ingrese sus nombres" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Apellidos</center>
                        </th>
                        <td>
                            <center><input type="text" name="apellidos" id="apellidos"value="<?php echo $arreglo3[3] ?>" placeholder="ingrese sus apellidos" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Tipo De Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_tipo_documento" id="id_tipo_documento"value="<?php echo $arreglo3[4] ?>" placeholder="Seleccione el tipo del documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Numero De Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_documento" id="numero_documento"value="<?php echo $arreglo3[5] ?>" placeholder="Digite el Numero del documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Correo Electronico</center>
                        </th>
                        <td>
                            <center><input type="text" name="correo" id="correo"value="<?php echo $arreglo3[6] ?>" placeholder="Digite su correo electronico" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Telefono</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_celular" id="numero_celular"value="<?php echo $arreglo3[7] ?>" placeholder="Digite numero de telefono" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Direccion</center>
                        </th>
                        <td>
                            <center><input type="text" name="direccion" id="direccion"value="<?php echo $arreglo3[8] ?>" placeholder="Digite su direccion" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Contraseña</center>
                        </th>
                        <td>
                            <center><input type="text" name="clave" id="clave"value="<?php echo $arreglo3[9] ?>" placeholder="Digite su contraseña" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><select name="estado" id="estado">

                            <?php
$query2 = "select * from clientes where nombres_cliente = '$arreglo3[10]' ";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);
echo $arreglo2[0];
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
                            <center><input type="file" name="imagen_cliente" id="imagen_cliente"value="<?php echo $arreglo3[11] ?>" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                </table>
                <a href="clientes.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="submit" class="btn btn-primary" name="guardar"><i class="fa fa-check" aria-hidden="true">Modificar</i></button>
                </P>
            </center>
        </form>
    </div>
</body>
</html>
