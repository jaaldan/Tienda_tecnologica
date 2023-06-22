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
        <div class="content-page cover-background font-content-news">
            <div class="jumbotron">
              <h1 class="tittles-pages">Noticias PhoneStore</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsam quod dignissimos rerum veniam rem architecto voluptas quos facere voluptatibus molestiae odit, suscipit atque id, voluptate culpa assumenda a repellendus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quo repudiandae error dicta maxime, perspiciatis, repellendus laborum, fugiat doloribus deserunt rem illum! Nostrum quos sit reiciendis unde qui a accusantium.
              </p>
            </div>
            <section class="all-news-contents section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-push-4">
                            <h2 class="tittles-pages text-center">Lo nuevo de Microsoft (Windows 10 Mobile)</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus provident eos suscipit officiis earum laboriosam eaque magnam, temporibus id aliquid dolore, explicabo autem dolorem? Nam officiis, distinctio commodi enim rem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est laboriosam tempora ut ipsam beatae voluptatum magnam illo aliquam, veniam quos officia iste non et molestias mollitia fuga saepe, obcaecati aliquid.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-pull-8">
                            <img src="../../assets/img/news-windows-phone.jpg" alt="windows-phone" class="img-responsive img-rounded center-box-content">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <h2 class="tittles-pages text-center">Lo nuevo de Google (Android 6 Marshmallow)</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus provident eos suscipit officiis earum laboriosam eaque magnam, temporibus id aliquid dolore, explicabo autem dolorem? Nam officiis, distinctio commodi enim rem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est laboriosam tempora ut ipsam beatae voluptatum magnam illo aliquam, veniam quos officia iste non et molestias mollitia fuga saepe, obcaecati aliquid.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <img src="../../assets/img/news-android.jpg" alt="Android" class="img-responsive img-rounded center-box-content">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-push-4">
                            <h2 class="tittles-pages text-center">Lo nuevo de Apple (iOS 9.3)</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus provident eos suscipit officiis earum laboriosam eaque magnam, temporibus id aliquid dolore, explicabo autem dolorem? Nam officiis, distinctio commodi enim rem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est laboriosam tempora ut ipsam beatae voluptatum magnam illo aliquam, veniam quos officia iste non et molestias mollitia fuga saepe, obcaecati aliquid.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-pull-8">
                            <img src="../../assets/img/news-iOS.jpg" alt="iOS" class="img-responsive img-rounded center-box-content">
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