<?php
include('../../conexion/conectar.php');
include("../../controlador/pedidoscontrolador.php");
$obj = new pedidos();
if ($_POST) {

    $obj->id_pedido = $_POST['id_pedido'];
    $obj->id_cliente_pedido = $_POST['id_cliente_pedido'];
    $obj->direccion_pedido = $_POST['direccion_pedido'];
    $obj->fecha_pedido = $_POST['fecha_pedido'];
    $obj->estado_pedido = $_POST['estado_pedido'];
}
$key = $_GET['key'];
if ($key > 0) {

    $conet = new conexion();
    $c = $conet->conectando();
    $query = "select * from pedidos where id_pedido = '$key'";
    $resultado = mysqli_query($c, $query);
    $arreglo2 = mysqli_fetch_array($resultado);
    $obj->id_pedido = $arreglo2[0];
    $obj->id_cliente_pedido = $arreglo2[1];
    $obj->direccion_pedido = $arreglo2[2];
    $obj->fecha_pedido = $arreglo2[3];
    $obj->estado_pedido = $arreglo2[4];

} else {
    $obj->id_pedido = "";
    $obj->id_cliente_pedido = "";
    $obj->direccion_pedido = "";
    $obj->fecha_pedido = "";
    $obj->estado_pedido = "";
}
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
    <title>Pedidos</title>
</head>
<body>
<div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
         <center><img src="../../img/logo_2_T_T.jpg" width="550px" height="175px" alt=""></center>
         <br>
         <br>
         <h2>Eliminar Pedido</h2>
        </div>
        <form action="" name="eliminar_pedido" method="POST">
        <center>
        <table class="table table-striped table-hover table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                    <th class="text-center">
                        <center>Código</center>
                    </th>
                    <td class="text-center">
                    <input type="text" name="id_pedido" id="id_pedido"  value="<?php echo $arreglo2[0]?>" readonly>
                    </td>
                    </tr>
                    <tr class="text-center align-middle">
                    <th class= "text-center">
                        <center>Cliente</center>
                    </th>
                    <td class="text-center">
                    <center><input type="text" name="id_cliente_pedido" id="id_cliente_pedido" value="<?php 
                        $query3="select nombres_cliente, apellidos_cliente from clientes where id_cliente = '$arreglo2[1]'";
                        $resultado3=mysqli_query($c,$query3);
                        $arreglo3 = mysqli_fetch_array($resultado3);
                        echo $arreglo3[0] . " "; 
                        echo $arreglo3[1]; ?>" readonly></center>
                    </td>
                    </tr>
                    <tr class="text-center align-middle">
                    <th class= "text-center">
                        <center>Dirección</center>
                    </th>
                    <td class="text-center">
                    <input type="text" name="direccion_pedido" id="direccion_pedido"  value="<?php echo $arreglo2[2]?>" readonly>
                    </td>
                    </tr>
                    <tr class="text-center align-middle">
                    <th class= "text-center">
                        <center>Fecha</center>
                        </th>
                    <td class="text-center">
                    <input type="text" name="fecha_pedido" id="fecha_pedido"  value="<?php echo $arreglo2[3]?>" readonly>
                    </td>
                    </tr>    
                    <tr class="text-center align-middle">
                    <th class= "text-center">
                        <center>Producto</center>
                    </th>
                    <td class="text-center">
                    <input type="text" name="marca_producto" id="marca_producto"  value="<?php echo $arreglo2[3]?>" readonly>
                    </td>
                    </tr>
                    <tr class="text-center align-middle">
                    <th class= "text-center"> 
                        <center>Cantidad</center>
                    </th>
                    <td class="text-center">
                    <input type="text" name="marca_producto" id="marca_producto"  value="<?php echo $arreglo2[3]?>" readonly>
                    </td>
                    </tr> 
                    <tr class="text-center align-middle">
                    <th class= "text-center">
                        <center>Valor IVA</center>
                    </th>
                    <td class="text-center">
                    <input type="text" name="marca_producto" id="marca_producto"  value="<?php echo $arreglo2[3]?>" readonly>
                    </td>
                    </tr> 
                    <tr class="text-center align-middle">
                    <th class= "text-center">
                        <center>Precio de venta</center>
                    </th>
                    <td class="text-center">
                    <input type="text" name="marca_producto" id="marca_producto"  value="<?php echo $arreglo2[3]?>" readonly>
                    </td>
                    </tr>
                    <tr class="text-center align-middle">
                    <th class= "text-center">
                        <center>Estado</center>
                    </th>
                    <td class="text-center">
                    <input type="text" name="estado_pedido" id="estado_pedido"  value="<?php echo $arreglo2[4]?>" readonly>
                    </td>
                    </tr> 
                    </table>
        <P align="right"><a href="pedidos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
        <button type="submit" class="btn btn-success" name="elimina"><i class="fa fa-check" aria-hidden="true">Eliminar</i></button></P>
        </form>
    </div>
</body>
</html>