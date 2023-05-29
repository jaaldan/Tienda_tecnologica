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
    $obj->imagen_cliente  = $_FILES['imagen_cliente']['tmp_name'];
}
// $key = $_GET['key'];
// echo $key;

?>
<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from tipo_documentos";
$query = mysqli_query($c, $sql);
$r = mysqli_fetch_assoc($query);
?>
<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql1 = "select * from roles";
$query1 = mysqli_query($c, $sql1);
$r1 = mysqli_fetch_assoc($query1);
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
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
        <br>
        <br>
          <h2>Nuevo Cliente</h2>
        </div>
        <form action="" name="agregar_cliente" method="POST" enctype="multipart/from-data">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_cliente" id="id_cliente" placeholder="El Codigo es Asignado por el Sistema" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Rol
                        </th>
                        <td class="text-center">
                            <select name="id_rol_cliente" id="id_rol_cliente">
                                 <option>
                                     Seleccione Rol
                                    <?php
                                     do {
                                     $documento1 = $r1['id_rol'];
                                     $nombre1 = $r1['nombre_rol'];
                                     if ($documento1 == $obj->id_rol_cliente) {
                                     echo "<option value=$documento1=>$nombre1";
                                     } else {
                                     echo "<option  value=$documento1=>$nombre1";
                                     }
                                     } while ($r1 = mysqli_fetch_assoc($query1));

                                     $row = mysqli_num_rows($query1);
                                     $rows = 0;
                                     if ($rows > 0) {
                                      mysqli_data_seek($r1, 0);
                                     $r1 = mysqli_fetch_assoc($query1);
                                     }
                                    ?>
                                   </option>
                                </select>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombres
                        </th>
                        <td class="text-center">
                            <input type="text" name="nombres" id="nombres" placeholder="escriba su nombre" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Apellidos
                        </th>
                        <td class="text-center">
                            <input type="text" name="apellidos" id="apellidos" placeholder="escriba sus apellidos" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Tipo De Documento
                        </th>
                            <td class="text-center">
                                <select name="id_tipo_documento_cliente" id="id_tipo_documento_cliente">
                                 <option>
                                     Seleccione Tipo De Documento
                                    <?php
                                     do {
                                     $documento = $r['id_tipo_documento'];
                                     $nombre = $r['nombre_documento'];
                                     if ($documento == $obj->id_tipo_documento_cliente) {
                                     echo "<option value=$documento=>$nombre";
                                     } else {
                                     echo "<option  value=$documento=>$nombre";
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
                            </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Numero De Documento
                        </th>
                        <td class="text-center">
                            <input type="text" name="numero_documento" id="numero_documento" placeholder="Digite el Numero del documento" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Correo Electronico
                        </th>
                        <td class="text-center">
                            <input type="text" name="correo" id="correo" placeholder="Digite su correo" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Telefono
                        </th>
                        <td class="text-center">
                            <input type="text" name="numero_celular" id="numero_celular" placeholder="Digite numero de telefono" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Direccion
                        </th>
                        <td class="text-center">
                            <input type="text" name="direccion" id="direccion" placeholder="Digite su direccion" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Contraseña
                        </th>
                        <td class="text-center">
                            <input type="text" name="clave" id="clave" placeholder="Digite su contraseña" maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>
                        <td class="text-center">
                            <select name="estado" id="estado">
                                    <option value="seleccionar">Seleccione</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                                </select>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Imagen
                        </th>
                        <td class="text-center">
                            <input type="file" name="imagen_cliente" id="imagen_cliente">
                        </td>
                    </tr>
                </table>
                <a href="clientes.php">
                           <P align="right"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                           <a href="clientes.php"><button type="submit" class="btn btn-success" name="guardar"><i class="fa fa-check" aria-hidden="true">Crear</i></button></a>
                </P>
            </center>
        </form>
    </div>
</body>
</html>
