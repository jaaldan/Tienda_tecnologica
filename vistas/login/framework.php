<?php
include "../../conexion/conectar.php";

$cone = new conexion();
$c = $cone->conectando();
$query = "SELECT COUNT('id_rol_usuario') as totalRegistros FROM `usuarios` WHERE id_rol_usuario IN (1, 2)";
$ejecuta = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($ejecuta);
$totalRegistros = $arreglo['totalRegistros'];
?>
<?php

$cone = new conexion();
$c = $cone->conectando();
$query1 = "SELECT COUNT('id_cliente') AS totalRegistros1 FROM `clientes`";
$ejecuta1 = mysqli_query($c, $query1);
$arreglo1 = mysqli_fetch_array($ejecuta1);
$totalRegistros1 = $arreglo1['totalRegistros1'];

?>
<?php

$cone = new conexion();
$c = $cone->conectando();
$query2 = "SELECT COUNT('id_categoria') AS totalRegistros2 FROM `categorias`";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);
$totalRegistros2 = $arreglo2['totalRegistros2'];

?>
<?php

$cone = new conexion();
$c = $cone->conectando();
$query3 = "SELECT COUNT('id_producto') AS totalRegistros3 FROM `productos`";
$ejecuta3 = mysqli_query($c, $query3);
$arreglo3 = mysqli_fetch_array($ejecuta3);
$totalRegistros3 = $arreglo3['totalRegistros3'];

?>
<?php

$cone = new conexion();
$c = $cone->conectando();
$query4 = "SELECT COUNT('id_venta') AS totalRegistros4 FROM `ventas`";
$ejecuta4 = mysqli_query($c, $query4);
$arreglo4 = mysqli_fetch_array($ejecuta4);
$totalRegistros4 = $arreglo4['totalRegistros4'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>framework</title>
    <link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/sweetalert2.css">
	<link rel="stylesheet" href="../../css/material.min.css">
	<link rel="stylesheet" href="../../css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="../../css/main.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="../../js/material.min.js"></script>
	<script src="../../js/sweetalert2.min.js"></script>
	<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/main.js"></script>
</head>
<body>
<div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
    <section class="full-width text-center" style="padding: 0px 0;">
	 <img class="text-center tittles" src="../../img/logo_2_T_T.jpg" width="600px" height="200px" alt="">
			<br>
			<br>
			<!-- Tiles -->
		<a href="../usuarios/usuarios.php" target="marco" class="full-width">
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
					<?php echo $totalRegistros ?><br>
						<small>Administrador</small>
					</span>
				</div>
				<i class="zmdi zmdi-account tile-icon"></i>
			</article>
		</a>
		<a href="../clientes/clientes.php" target="marco" class="full-width btn-subMenu">
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
					<?php echo $totalRegistros1 ?><br>
						<small>Clientes</small>
					</span>
				</div>
				<i class="zmdi zmdi-accounts tile-icon"></i>
			</article>
		</a>
		<a href="../categorias/categorias.php" target="marco" class="full-width">
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
					<?php echo $totalRegistros2 ?><br>
						<small>Categorias</small>
					</span>
				</div>
				<i class="zmdi zmdi-label tile-icon"></i>
			</article>
		</a>
		<a href="../productos/productos.php" target="marco" class="full-width">
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
					<?php echo $totalRegistros3 ?><br>
						<small>Productos</small>
					</span>
				</div>
				<i class="zmdi zmdi-washing-machine tile-icon"></i>
			</article>
		</a>
		<a href="../ventas/ventas.php" target="marco" class="full-width">
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
					<?php echo $totalRegistros4 ?><br>
						<small>ventas</small>
					</span>
				</div>
				<i class="zmdi zmdi-shopping-cart tile-icon"></i>
			</article>
		</a>
	</section>
</div>	
</body>
</html>
