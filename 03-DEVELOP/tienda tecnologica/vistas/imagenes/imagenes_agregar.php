<?php
include('../../conexion/conectar.php');
include("../../controlador/imagenescontrolador.php");
$obj = new imagenes();
if ($_POST) {

    $obj->id_imagen = $_POST['id_imagen'];
    $obj->id_producto = $_POST['id_producto'];
    $obj->imagen_producto = $_FILES['imagen_producto']['tmp_name'];
}
?>

<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from productos";
$query = mysqli_query($c, $sql);
$r = mysqli_fetch_assoc($query);
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
    <title>Agregar Imagen</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
            <center><img src="../../img/logo_2_T_T.jpg" width="750px" height="225px" alt=""></center>
            <br>
            <br>
            <h2>Agregar Imagen</h2>
        <br>
        <br>
        <form action="" name="imagenes_agregar" method="POST" enctype="multipart/form-data">
                        <table class="table table-striped table table-bordered border-success table table-hover">
                            <tr>
                            <th>
                            <center>Código</center>
                            </th>
                            <td>
                            <center><input type="number" name="id_imagen" id="id_imagen" placerholder="El Codigo es asignado por el sistema" readOnly></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Nombre producto</center>
                            </th>
                            <td>
                            <center><select name="id_producto" id="id_producto">
                            <option>
                            Seleccione el producto
                            <?php
                            do {
                            $producto = $r['id_producto'];
                            $nombre = $r['nombre_producto'];
                            if ($producto == $obj->id_producto) {
                            echo "<option value=$producto=>$nombre";
                            } else {
                            echo "<option  value=$producto>$nombre";
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
                            <center>Imagen</center>
                            </th>
                            <td>
                            <center><input type="file" name="imagen_producto" id="imagen_producto"></center>
                            </td>
                            </tr>
                        </table>
                        <P align="right"><a href="imagenes.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                        <button type="submit" class="btn btn-success" name="guarda"><i class="fa fa-check" aria-hidden="true">Guardar</i></button></P>
    </form>
    </div>
</body>
</html>