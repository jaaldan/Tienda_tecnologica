<!-- 
  https://www.youtube.com/c/CarlosAlfaro007
-->
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/sweetalert2.css">
	<link rel="stylesheet" href="../../css/material.min.css">
	<link rel="stylesheet" href="../../css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="../../css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="../../js/material.min.js"></script>
	<script src="../../js/sweetalert2.min.js"></script>
	<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/main.js"></script>
</head>

<body>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<img src="../../assets/img/usuario.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption>
					<span>
						Nombre Administrador<br>
						<small>Admin</small>
					</span>
				</figcaption>
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="home.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-home"></i>
							</div>
							<div class="navLateral-body-cr">
								Inicio
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-case"></i>
							</div>
							<div class="navLateral-body-cr">
								Administrador
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="../usuarios/usuarios.php" target="marco" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts"></i>
									</div>
									<div class="navLateral-body-cr">
										Usuarios
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="../categorias/categorias.php" target="marco" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-label"></i>
									</div>
									<div class="navLateral-body-cr">
										Categorias
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="../pagos/pagos.php" target="marco" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-card"></i>
									</div>
									<div class="navLateral-body-cr">
										Pagos
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="../documentos/documentos.php" target="marco" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-file"></i>
									</div>
									<div class="navLateral-body-cr">
										Documentos
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../clientes/clientes.php" target="marco" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-account-circle"></i>
							</div>
							<div class="navLateral-body-cr">
								Clientes
							</div>
						</a>

					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../productos/productos.php" target="marco" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr">
								Productos
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../entrada_de_productos/entradas.php" target="marco" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-swap-vertical"></i>
							</div>
							<div class="navLateral-body-cr">
								Entrada de productos
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../pedidos/pedidos.php" target="marco" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart-plus"></i>
							</div>
							<div class="navLateral-body-cr">
								Pedidos
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../ventas/ventas.php" target="marco" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-chart"></i>
							</div>
							<div class="navLateral-body-cr">
								Ventas
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../envios/envios.php" target="marco" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-truck"></i>
							</div>
							<div class="navLateral-body-cr">
								Envios
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../transportadora/transportadora.php" target="marco" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-airplane"></i>
							</div>
							<div class="navLateral-body-cr">
								Trasportadora
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-wrench"></i>
							</div>
							<div class="navLateral-body-cr">
								Herramientas
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="#!" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-help"></i>
									</div>
									<div class="navLateral-body-cr">
										Ayuda
									</div>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>
				<div class="mdl-tooltip" for="btn-menu">Ocultar / Mostrar MENU</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">

						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">Cerrar cesion</div>
						</li>
						<li><small>Nombre Usuario</small></li>
						<li>
							<figure>
								<img src="../../assets/img/usuario.png" alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<section class="full-width" style="margin: 30px 0;">
			<iframe name="marco" src="framework.php" frameborder="0" width="100%" height="900"></iframe>
		</section>
	</section>
</body>

</html>