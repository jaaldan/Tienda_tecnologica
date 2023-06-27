<?php
include("../../conexion/conectar.php");
if ($_POST) {
    $obj->id_pedido = $_POST['id_pedido'];
}
$conet = new conexion();
$c = $conet->conectando();
$query = "select count(*) as totalRegistros from pedidos";
$ejecuta = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($ejecuta);
$totalRegistros = $arreglo['totalRegistros'];
//echo $totalRegistros;
$maximoRegistros = 5;
if (empty($_GET['pagina'])) {
    $pagina = 1;
} else {
    $pagina = $_GET['pagina'];
}
$desde = ($pagina - 1) * $maximoRegistros;
$totalPaginas = ceil($totalRegistros / $maximoRegistros);
//echo $totalPaginas;
if (isset($_POST['search'])) {
    $query2 = "select * from pedidos where id_pedido like '%$obj->id_pedido%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from pedidos limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
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
         <h2>Detalle del Pedido</h2>
        </div>
        <form action="" name="detalle_pedido" method="POST">
        <center>
        <table class="table table-striped table-hover table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                    <th class="text-center">
                        <center>Código</center>
                    </th>
                    <td class="text-center">
                    <input type="text" name="id_pedido " id="id_pedido"  value="<?php echo $arreglo2[0]?>" readonly>
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
                    <P align="right"><a href="pedidos.php" target="marco"> 
                    <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button>
                </a>
                </P>
            </center>
        </form>
    </div>
</body>
</html>