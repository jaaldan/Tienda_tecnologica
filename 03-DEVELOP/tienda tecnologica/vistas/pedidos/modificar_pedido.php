<?php
include('../../conexion/conectar.php');
include('../../controlador/pedidoscontrolador.php'); 
$obj = new pedidos();
if($_POST){

    $obj->id_pedido = $_POST['id_pedido'];
    $obj->id_cliente_pedido = $_POST['id_cliente_pedido'];
    $obj->direccion_pedido = $_POST['direccion_pedido'];
    $obj->fecha_pedido = $_POST['fecha_pedido'];
    $obj->estado_pedido = $_POST['estado_pedido'];
}
$key = $_GET['key'];
//echo $key;
$conet = new conexion();
$c = $conet->conectando();
$query="select * from pedidos where id_pedido = '$key'";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$obj->id_pedido = $arreglo[0];
$obj->id_cliente_pedido = $arreglo[1];
$obj->direccion_pedido = $arreglo[2];
$obj->fecha_pedido = $arreglo[3];
$obj->estado_pedido = $arreglo[4];
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
    <title>Modificar Pedido</title>
</head>
<body>
<div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
         <center><img src="../../img/logo_2_T_T.jpg" width="550px" height="175px" alt=""></center>
         <br>
         <br>
         <h2>Modificar Pedido</h2>
        </div>
        <form action="" name="modificar_pedido" method="POST">
            <table class="table table-striped table-hover table-bordered table-sm shadow">
            <tr class="text-center align-middle">
            <th class="text-center">
            <center>Codigo</center>
            </th>
            <td class="text-center">
            <center><input type="number" name="id_pedido" id="id_pedido" value="<?php echo $obj->id_pedido?>" readOnly></center>
            </td>
            </tr>
            <tr class="text-center align-middle">
            <th class="text-center">
            <center>Cliente</center>
            </th>
            <td class="text-center">
                            <center><select name="id_cliente_pedido" id="id_cliente_pedido" readOnly>
                            <option>
                            Seleccione el cliente
                            <?php
                            do {
                            $cliente = $r['id_cliente'];
                            $nombre = $r['nombres_cliente'];
                            if ($cliente == $obj->id_cliente_pedido) {
                            echo "<option value=$cliente=>$nombre";
                            } else {
                            echo "<option  value=$cliente>$nombre";
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
            <tr class="text-center align-middle">
            <th class="text-center">
             <center>Direccion</center>
            </th>
            <td class="text-center">
             <center><input type="text" name="direccion_pedido" id="direccion_pedido" value="<?php echo $obj->direccion_pedido  ?>"></center>
             </td>
             </tr>
            <tr class="text-center align-middle">
            <th class="text-center">
             <center>Fecha</center>            
             </th>
            <td class="text-center">
             <center><input type="date" name="fecha_pedido" id="fecha_pedido" value="<?php echo $obj->fecha_pedido  ?>"></center>
             </td>
             </tr>
             <tr class="text-center align-middle">
             <th class="text-center">
             <center>Producto</center>            
             </th>
            <td class="text-center">
            <center><select name="id_producto_detalle_pedido" id="id_producto_detalle_pedido">
            <option>
            Seleccione el producto
            <?php
            do {
            $producto = $p['id_producto'];
            $nombre_producto = $p['nombre_producto'];
            if ($producto == $obj->id_producto_detalle_pedido) {
            echo "<option value=$producto=>$nombre_producto";
            } else {
            echo "<option value=$producto>$nombre_producto";
            }
            } while ($p = mysqli_fetch_assoc($quer));
            $row = mysqli_num_rows($quer);
            $rows = 0;
            if ($rows > 0) {
            mysqli_data_seek($p, 0);
            $p = mysqli_fetch_assoc($quer);
            }
            ?>
            </option>
            </select>
                        </td>
                    </tr>
            <tr class="text-center align-middle">
            <th class="text-center">
            <center>Cantidad</center>
            </th>
            <td class="text-center">
            <center><input type="number" name="id_pedido" id="id_pedido" value="<?php echo $obj->id_pedido?>" readOnly></center>
            </td>
            </tr>
            <tr class="text-center align-middle">
            <th class="text-center">
            <center>Valor IVA</center>
            </th>
            <td class="text-center">
            <center><input type="number" name="id_pedido" id="id_pedido" value="<?php echo $obj->id_pedido?>" readOnly></center>
            </td>
            </tr>
            <tr class="text-center align-middle">
            <th class="text-center">
            <center>Precio de venta</center>
            </th>
            <td class="text-center">
            <center><input type="number" name="id_pedido" id="id_pedido" value="<?php echo $obj->id_pedido?>" readOnly></center>
            </td>
            </tr>
             <tr class="text-center align-middle">
             <th class="text-center">
             <center>Estado</center></th>
             <td class="text-center"><center><select name="estado_pedido" id="estado_pedido" value="<?php echo $obj->estado_pedido  ?>">
             <option value="ACTIVO">ACTIVO</option>
             <option value="INACTIVO">INACTIVO</option>
             </td>
             </tr>
             </table>
        <P align="right"><a href="pedidos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
        <button type="submit" class="btn btn-success" name="modifica"><i class="fa fa-check" aria-hidden="true">Guardar</i></button></P>
        </form>
    </div>
</body>
</html>