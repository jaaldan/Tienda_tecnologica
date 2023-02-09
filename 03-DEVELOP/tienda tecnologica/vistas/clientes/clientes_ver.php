<?php
include "../../conexion/conectar.php";
include "../../controlador/clientes_controlador.php";

$obj = new Clientes();
if ($_POST) {

    $obj->id_cliente = $_POST['id_cliente'];
    $obj->id_rol = $_POST['id_rol'];
    $obj->nombres = $_POST['nombres'];
    $obj->apellidos = $_POST['apellidos'];
    $obj->id_tipo_documento = $_POST['id_tipo_documento'];
    $obj->numero_documento = $_POST['numero_documento'];
    $obj->correo = $_POST['correo'];
    $obj->numero_celulaar = $_POST['numero_celular'];
    $obj->direccion = $_POST['direccion'];
    $obj->clave = $_POST['clave'];
    $obj->estado = $_POST['estado'];
    $obj->imagen_cliente = $_POST['imagen_cliente'];

}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query3 = "select * from cliente where id_cliente = '$key' ";
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
    <title>clientes ver</title>
</head>
<body>
 <div class="container shadow p-3 mb-5 bg-body rounded">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
          <h2 class="modal-title" id="exampleModalLabel">Datos del Cliente</h2>
        </div>
         <form action="" name="agregar_cliente" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Codigo</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_cliente" id="id_cliente"value="<?php echo $arreglo3[0] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Rol</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_rol" id="id_rol"value="<?php echo $arreglo3[1] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombres</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombre" id="nombres"value="<?php echo $arreglo3[2] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Apellidos</center>
                        </th>
                        <td>
                            <center><input type="text" name="apellidos" id="apellidos"value="<?php echo $arreglo3[3] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Tipo De Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_tipo_documento" id="id_tipo_documento"value="<?php echo $arreglo3[4] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Numero de Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_documento" id="numero_documento"value="<?php echo $arreglo3[5] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Correo</center>
                        </th>
                        <td>
                            <center><input type="text" name="correo" id="correo"value="<?php echo $arreglo3[6] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Telefono</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_celular" id="numero_celular"value="<?php echo $arreglo3[7] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Direccion</center>
                        </th>
                        <td>
                            <center><input type="text" name="direccion" id="direccion"value="<?php echo $arreglo3[8] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Clave</center>
                        </th>
                        <td>
                            <center><input type="text" name="clave" id="clave"value="<?php echo $arreglo3[9] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Estado</center>
                        </th>
                        <td>
                            <center><input type="text" name="estado" id="estado"value="<?php echo $arreglo3[10] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Imagen</center>
                        </th>
                        <td>
                            <center><input type="text" name="imagen_cliente" id="imagen_cliente"value="<?php echo $arreglo3[11] ?>" readonly maxlength="50" size="20"></center>
                        </td>
                    </tr>
                </table>
                <a href="clientes.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="button" class="btn btn-primary" name="imprimir" onClick="window.print()"><i class="fa fa-check" aria-hidden="true">Imprimir</i></button>
                </P>
            </center>
        </form>
    </div>
</body>
</html>
