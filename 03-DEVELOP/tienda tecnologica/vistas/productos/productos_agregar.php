<?php
include('../../conexion/conectar.php');
include("../../controlador/productoscontrolador.php");
$obj = new productos();
if ($_POST) {

    $obj->id_producto = $_POST['id_producto'];
    $obj->nombre_producto = $_POST['nombre_producto'];
    $obj->id_categoria = $_POST['id_categoria'];
    $obj->marca = $_POST['marca'];
    $obj->color = $_POST['color'];
    $obj->pvp_con_iva = $_POST['pvp_con_iva'];
    $obj->salidas = $_POST['salidas'];
    $obj->cantidad_stock = $_POST['cantidad_stock'];
}
?>

<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from categorias";
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
    <title>Productos</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
            <center><img src="../../img/logo_2_T_T.jpg" width="750px" height="225px" alt=""></center>
            <br>
            <br>
            <h2>Agregar producto</h2>
        <br>
        <br>
        <form action="" name="productos_agregar" method="POST">
                        <table class="table table-striped table table-bordered border-success table table-hover">
                            <tr>
                            <th>
                            <center>Código</center>
                            </th>
                            <td>
                            <center><input type="number" name="id_producto" id="id_producto" placerholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example" readOnly></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Nombre producto</center>
                            </th>
                            <td>
                            <center><input type="text" name="nombre_producto" id="nombre_producto" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Nombre categoría</center>
                            </th>
                            <td>
                            <center><select name="id_categoria" id="id_categoria">
                            <option>
                            Seleccione la categoria
                            <?php
                            do {
                            $categoria = $r['id_categoria'];
                            $nombre = $r['nombre_categoria'];
                            if ($categoria == $obj->id_categoria) {
                            echo "<option value=$categoria=>$nombre";
                            } else {
                            echo "<option  value=$categoria>$nombre";
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
                            <center>Marca</center>
                            </th>
                            <td>
                            <center><input type="text" name="marca" id="marca" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Color</center>
                            </th>
                            <td>
                            <center><input type="text" name="color" id="color" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>PVP con IVA</center>
                            </th>
                            <td>
                            <center><input type="text" name="pvp_con_iva" id="pvp_con_iva" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Salidas</center>
                            </th>
                            <td>
                            <center><input type="text" name="salidas" id="salidas" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Cantidad(Stock)</center>
                            </th>
                            <td>
                            <center><input type="text" name="cantidad_stock" id="cantidad_stock" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                        </table>
                        <P align="right"><a href="productos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                        <button type="submit" class="btn btn-success" name="guarda"><i class="fa fa-check" aria-hidden="true">Guardar</i></button></P>
    </form>
    </div>
</body>
</html>