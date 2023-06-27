<?php
include "../../conexion/conectar.php";
include "head_cliente.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Noticias</title>
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
    <div class="page-container">
	    <div class="content-page">
		    <div class="hidden-xs content-carousel">
		    	<div id="carousel-phonestore" class="carousel slide" data-ride="carousel" style="margin-top:0;">
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-phonestore" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-phonestore" data-slide-to="1"></li>
				    <li data-target="#carousel-phonestore" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="../../assets/img/S23-Design-Story_main1-e1679611182387.jpeg" alt="">
				      <div class="carousel-caption">
				        <h2>Nuevo Samsung S23FE</h2>
				      </div>
				    </div>
				    <div class="item">
				      <img src="../../assets/img/T860JfbIBCz9ZKshhkqvgZQFeVlj95QbwYAh3CCi.jpg" alt="">
				      <div class="carousel-caption">
				        <h2>Novedoso estuche de auriculares</h2>
				      </div>
				    </div>
				    <div class="item">
				      <img src="../../assets/img/iOS-17-scaled.jpg" alt="">
				      <div class="carousel-caption">
				        <h2>Nueva Generacion IOS 17</h2>
				      </div>
				    </div>
				  </div>
				  <a class="left carousel-control" href="#carousel-phonestore" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-phonestore" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>
		    </div>
		    <div class="visible-xs static-image-carousel">
		    	<img src="../../assets/img/image-carousel.jpg"  alt="" class="img-responsive">
		    </div>
            <section class="all-news-contents section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-push-4">
                            <h2 class="tittles-pages text-center">Samsung Galaxy S23 FE: características y posible precio en Colombia del modelo 'fan edition'</h2>
                            <p class="lead">Los teléfonos 'Fan Edition' (FE) de Samsung no han gozado de la mejor atención por parte de la compañía. Después de lanzar el S20 FE, 
                                un equipo que ganó muy buenas reseñas, la compañía hizo oficial el S21 FE apenas un par de meses antes de lanzar la Serie S22. Y, claro está, nunca tuvimos un S22 FE.
                                Es extraño, por decir lo menos, y ha dejado un hueco en el mercado desde enero de 2022. Algunos reportes internos sugieren que se debió también a la escasez de chips que trajo la pandemia,
                                que hizo que Samsung se enfocara principalmente en la línea Galaxy S de base.Sin embargo, varios rumores y filtraciones apuntan a que el S23 FE no solo es una realidad,
                                sino que será lanzado en los próximos meses, coincidiendo con la llegada de los nuevos plegables de la compañía.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-pull-8">
                            <img src="../../assets/img/Samsung-Galaxy-S23-plus-Phantom.jpg" alt="windows-phone" class="img-responsive img-rounded center-box-content">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <h2 class="tittles-pages text-center">5710 Xpress Audio: un estuche de auriculares Bluetooth con celular y reproductor de .mp3 incluidos</h2>
                            <p class="lead">Este teléfono llegó antes de que los iPod se tomaran el mundo y abrió para muchos usuarios la revolucionaria idea de llevar su música en .mp3 en sus teléfonos.
                                            Por supuesto, también llegó antes de la era de los smartphones, por lo que comprarlo, incluso en su versión del siglo XXI, es un regreso a lo básico: un teléfono que hace llamadas y reproduce música… y un par de funciones más.
                                            Pero sin duda es lo que un erudito llamaría una conversation piece, que llama la atención y obliga a hablar de él donde quiera que se muestre. Y gran parte de esa cualidad se debe a una innovación que no estaba presente en el 5710 original.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <img src="../../assets/img/1366_2000.jpg" alt="Android" class="img-responsive img-rounded center-box-content">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-push-4">
                            <h2 class="tittles-pages text-center">Apple lanzó iOS 17 con coloridas novedades, pero pocos cambios de fondo</h2>
                            <p class="lead">Transcripciones en vivo de correos de voz, mensajes en video, actualizaciones para FaceTime, Mensajes y una vistosa solución de posters personalizados para los contactos, que promete renovar la manera en que se maneja la libreta de direcciones, integran las novedades de iOS 17, que Apple reveló durante su WWDC 2023.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-pull-8">
                            <img src="../../assets/img/images.jfif" alt="iOS" class="img-responsive img-rounded center-box-content">
                        </div>
                    </div>
                    <div class="row"><!-- Paginacion noticias -->
                        <div class="col-xs-12 text-center">
                            <ul class="pagination">
                              <li><a href="#">&laquo;</a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
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