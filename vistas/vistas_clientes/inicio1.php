<?php
include "../../conexion/conectar.php";
include "head_cliente.php";

$cone = new Conexion();
$c = $cone->conectando();
$query = "select nombre_categoria from categorias";
$ejecuta =($c-> query($query));

$cone = new Conexion();
$c = $cone->conectando();
$query1 = "select productos.*, imagenes.imagen_producto FROM productos JOIN imagenes ON productos.id_producto = imagenes.id_producto_imagen";
$ejecuta1 =($c-> query($query1));

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Productos</title>
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/normalize1.css">
	<link rel="stylesheet" href="../../css/bootstrap1.min.css">
	<link rel="stylesheet" href="../../css/font-awesome1.min.css">
	<link rel="stylesheet" href="../../css/style1.css">
	<link rel="Shortcut Icon" type="image/x-icon" href="../../assets/icons/shortcut-icon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../js/jquery1-1.11.2.min.js"><\/script>')</script>
	<script src="../../js/modernizr.js"></script>
	<script src="../../js/main1.js"></script>
	<script src="../../js/bootstrap1.min.js"></script>
</head>
<body>
	<div>		    
		    	<div>
				 <br>
		    		<div>
		    			<p class="tittles-pages">Tablets y Teléfonos</p>
		    		</div>
		    		<div >
		    			<div>
			    				<ul class="nav nav-tabs" role="tablist" id="TabProducts">
								    <?php
                                      while ($row = $ejecuta->fetch_assoc()){
                                    ?>
								  <li class="active"><a href="#all-categories" role="tab" data-toggle="tab"><i class="fa fa-th"></i>&nbsp; <?php echo $row['nombre_categoria'] ?></a></li>
								  <?php	
                                     }
                                    ?>
							        </ul>
							      </li>
								</ul>
								<div>
								  <!-- ===================================== Todas las categorias ============================================= -->
								  <br>
								    <div>
								  	  <p class="tittles-pages">Todos los productos</p>
									    <div id="productos">
									     <?php
                                           while ($row1 = mysqli_fetch_array($ejecuta1)){
                                         ?>    
								  	        <div id="pro">
								  		        <div>
										          <img src="<?php echo $row1['imagen_producto'];?>">
											        <div class="caption">
										             <h3 class=" text-center"><?php echo $row1['nombre_producto'] ?></h3>
										             <p class="text-justify"><?php echo $row1['descripcion_producto'] ?></p>
												     <?php	
                                                     }
                                                     ?>
										             <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										            </div>
										        </div>
								  	        </div>
								  	        <div class="row"><!-- Paginacion productos -->
										        <div class="col-xs-12 text-center">
									 		        <ul class="pagination">
											            <li><a href="#">&laquo;</a></li>
											            <li class="active"><a href="#">1</a></li>
											            <li><a href="#">2</a></li>
											            <li><a href="#">3</a></li>
											            <li><a href="#">4</a></li>
											            <li><a href="#">5</a></li>
											            <li><a href="#">6</a></li>
											            <li><a href="#">7</a></li>
											            <li><a href="#">&raquo;</a></li>
											        </ul>
										        </div>
									        </div>
								        </div>
									</div>
								</div>	
						</div>		
					</div>
				</div>				  
		    <footer class="footer">
                <div class="container-fluid">
    			    <div class="col-xs-12 text-center">
    				    <h3>Siguenos en</h3>
    				    <ul class="list-unstyled list-social-icons">
    					    <li >
    						 <a href="#!">
                               <i class="fa fa-facebook" style="background-color: #3B5998;"></i> 
                             </a>
    					    </li>
    					    <li>
    						 <a href="#!">
                                <i class="fa fa-google-plus" style="background-color: #DD4B39;"></i>
                             </a>
    					    </li>
    					    <li>
    						 <a href="#!">
                                <i class="fa fa-twitter"  style="background-color: #56A3D9;"></i>
                             </a>
    					    </li>
    					    <li>
    						 <a href="#!">
                                <i class="fa fa-youtube" style="background-color: #BF221F;"></i>
                             </a>
    					    </li>
    				    </ul>
    				    <h4>Tienda Tecnologica &copy; 2023</h4>
    			    </div>
    		    </div>
    	    </footer>
	</div>
</body>
</html>