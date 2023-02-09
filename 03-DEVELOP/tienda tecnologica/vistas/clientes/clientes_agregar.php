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
    $obj->imagen_cliente = $_FILES['imagen_cliente']['tmp_name'];

}
?>
<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from tipo_documento";
$query = mysqli_query($c, $sql);
$r = mysqli_fetch_assoc($query);
?>

<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';
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
    <title>clientes agregar</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
          <h2>Nuevo Cliente</h2>
        </div>
        <form action="" name="agregar_cliente" method="POST" enctype="multipart/from-data">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Codigo</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_cliente" id="id_cliente" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20"></center>
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
                            <center><input type="text" name="nombres" id="nombres" placeholder="escriba su nombre" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Apellidos</center>
                        </th>
                        <td>
                            <center><input type="text" name="apellidos" id="apellidos" placeholder="escriba sus apellidos" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Tipo De Documento</center>
                        </th>
                        <td>
                            <center>

                                <select name="id_tipo_documento" id="id_tipo_documento">
                                 <option>
                                     Seleccione Tipo De Documento
                                    <?php
do {
    $documento = $r['id_tipo_documento'];
    $nombre = $r['nombre_documento'];
    if ($documento == $obj->id_tipo_documento) {
        echo "<option value=$documento=>$nombre";
    } else {
        echo "<option  value=$documento>$nombre";
    }
} while ($r = mysqli_fetch_assoc($query));

$row = mysqli_num_rows($query);
$rows = 0;
if ($rows > 0) {
    mysqli_data_seek($r, 0);
    $r = mysqli_fetch_assoc($query);
}
?>
                                   </option>

                                </select>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Numero De Documento</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_documento" id="numero_documento" placeholder="Digite el Numero del documento" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Correo Electronico</center>
                        </th>
                        <td>
                            <center><input type="text" name="correo" id="correo" placeholder="Digite su correo" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Telefono</center>
                        </th>
                        <td>
                            <center><input type="text" name="numero_celular" id="numero_celular" placeholder="Digite numero de telefono" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Direccion</center>
                        </th>
                        <td>
                            <center><input type="text" name="direccion" id="direccion" placeholder="Digite su direccion" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Contraseña</center>
                        </th>
                        <td>
                            <center><input type="text" name="clave" id="clave" placeholder="Digite su contraseña" maxlength="50" size="20"></center>
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
                            <center><input type="file" name="imagen_cliente" id="imagen_cliente" maxlength="50" size="20"></center>
                        </td>
                    </tr>
                </table>
                <a href="clientes.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="submit" class="btn btn-primary" name="guardar"><i class="fa fa-check" aria-hidden="true">Crear</i></button>
                </P>
            </center>
        </form>
    </div>
</body>
</html>
