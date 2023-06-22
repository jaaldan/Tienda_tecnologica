<?php
include('../../conexion/conectar.php');
include("../../controlador/pedidoscontrolador.php");
$obj = new pedidos();
if ($_POST) {

    $obj->id_pedido = $_POST['id_pedido'];
    $obj->id_cliente_pedido = $_POST['id_cliente_pedido'];
    $obj->direccion_pedido = $_POST['direccion_pedido'];
    $obj->fecha_pedido = $_POST['fecha_pedido'];
    $obj->id_producto_detalle_pedido = $_POST['id_producto_detalle_pedido'];
    $obj->cantidad_producto_detalle_pedido = $_POST['cantidad_producto_detalle_pedido'];
    $obj->valor_iva_detalle_pedido = $_POST['valor_iva_detalle_pedido'];
    $obj->precio_venta_detalle_pedido = $_POST['precio_venta_detalle_pedido'];
    $obj->estado_pedido = $_POST['estado_pedido'];
}
?>

<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from clientes";
$query = mysqli_query($c, $sql);
$r = mysqli_fetch_assoc($query);
?>

<?php
$conet = new Conexion();
$c = $conet->conectando();
$sq = "select * from productos";
$quer = mysqli_query($c, $sq);
$p = mysqli_fetch_assoc($quer);
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
    <title>Agregar Pedido</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
            <center><img src="../../img/logo_2_T_T.jpg" width="400" height="150" alt=""></center>
            <br>
            <br>
            <h2>Agregar Pedido</h2>
            <br>
            <br>
        <form action="" name="agregar_pedido" method="POST">
        <table class="table-light table table-striped table table-bordered border-success table table-hover">
            <tr>
            <th>
            <center>Código</center>
            </th>
            <td>
            <center><input type="number" name="id_pedido" id="id_pedido" placerholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example" required readOnly></center>
            </td>
            </tr>
            <tr>
            <th>
            <center>Cliente</center>
            </th>
            <td>
            <center><select name="id_cliente_pedido" id="id_cliente_pedido">
            <option>
            Seleccione el cliente
            <?php
            do {
            $cliente = $r['id_cliente'];
            $nombre = $r['nombres_cliente'];
            $apellidos = $r['apellidos_cliente'];
            if ($cliente == $obj->id_cliente_pedido) {
            echo "<option value=$cliente=>$nombre $apellidos";
            } else {
            echo "<option value=$cliente>$nombre $apellidos";
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
             <center>Dirección</center>
             </th>
             <td>
             <center><input type="text" name="direccion_pedido" id="direccion_pedido" placerholder="Digite la direccion del domicilio" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
             <th>
             <center>Fecha</center>            
             </th>
             <td>
             <center><input type="date" name="fecha_pedido" id="fecha_pedido" placerholder="Digite la fecha del pedido" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
            <th>
            <center>Producto(s)</center>
            </th>
            </tr>
            <tr>
            <th>
             <center>Cantidad</center>
             </th>
             <td>
             <center><input type="number" name="cantidad_producto_detalle_pedido" id="cantidad_producto_detalle_pedido" placerholder="Digite la cantidad del producto" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
            <th>
             <center>Valor IVA</center>
             </th>
             <td>
             <center><input type="number" name="valor_iva_detalle_pedido" id="valor_iva_detalle_pedido" placerholder="Digite el valor IVA del producto" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
            <th>
             <center>Precio de venta</center>
             </th>
             <td>
             <center><input type="number" name="precio_venta_detalle_pedido" id="precio_venta_detalle_pedido" placerholder="Digite el precio de venta del producto" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
             <th><center>Estado</center></th>
             <td><center><select name="estado_pedido" id="estado_pedido">
             <option value="Activo">Activo</option>
             <option value="Inactivo">Inactivo</option>
             </tr>
             </table>
        <P align="right"><a href="pedidos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
        <button name="agregar_producto" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#Modalproducto"><i class="fa fa-address-book-o"
        aria-hidden="true">Agregar Producto</i></button>
        <button type="submit" class="btn btn-success" name="guardar"><i class="fa fa-check" aria-hidden="true">Guardar</i></button></P>
        </form>
    </div>
</body>
</html>