<?php
include("../../conexion/conectar.php");
if ($_POST) {
    $obj->id_imagen = $_POST['id_imagen'];
}
$key = $_GET['key'];
$conet = new conexion();
$c = $conet->conectando();
$query = "select count(*) as totalRegistros from imagenes";
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
    $query2 = "select * from imagenes where id_imagen like '%$obj->id_imagen%' and id_producto_imagen = '$key' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from imagenes where id_producto_imagen = '$key' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
}
/*

if($key==''){


    $query2 = "select * from imagenes where id_producto = '$key' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
}
*/
$paso = $key;

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
    <title>Imagenes del Producto</title>
</head>
<body>
<div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
            <table class="table ">
                <thead>
                    <head>
                        <tr>
                        <th><center><img src="../../img/logo_2_T_T.jpg" width="550px" height="175px" alt=""></center></th>
                        </tr>
                    </head>
                    <tr>
                        <th><h2><i class="fa fa-file-image-o fa-2x" aria-hidden="true"></i> Imagenes</h2></th>
                    </tr>
                </thead>
            </table>
        </div>
        <form action="" name="productos_imagen" method="POST">
        <div class="campo" id="filtropro">
        <nav class="navbar navbar-expand-lg bg-light">
                    <form class="d-flex" id="search" role="search">
                        <input class="form-control me-2" type="search" name="id_imagen" placeholder="Digite el código de la imagen" aria-label="Search">
                        <button type="submit" name="search" id="search" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true">Buscar</i></button>
                    </form>
        </nav>
            <div class="marco" align="left">
                <button type="submit" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
            </div>
            <section>
            <table class="table table-striped table-hover table table-bordered table-sm shadow">
                <tr>
                    <th>
                        <center>Código</center>
                    </th>
                    <th>
                        <center>Nombre producto</center>
                    </th>
                    <th>
                        <center>Imagen</center>
                    </th>
                    <th>
                        <center>Acciones</center>
                    </th>
                </tr>
                <?php
                            if ($arreglo2 == 0) {
                                //echo "no hay registros";
                            ?>
                            <div class="alert alert-warning" role="alert">
                                        <?php echo "No hay registros" ?>
                                </div>
                            <?php
                            } 
                            else{
                                do{
                                    ?>
                                    <tr>
                                    
                                        <td><?php echo $arreglo2[0] ?></td>
                                        <td><?php 
                                        $query3="select nombre_producto from productos where id_producto = '$arreglo2[1]'";
                                        $resultado3=mysqli_query($c,$query3);
                                        $arreglo3 = mysqli_fetch_array($resultado3);
                                        echo $arreglo3[0]; ?></td>
                                        <td><?php
                                        $query4="select imagen_producto from imagenes where id_imagen = '$arreglo2[2]'";
                                        $resultado4=mysqli_query($c,$query4);
                                        $arreglo4 = mysqli_fetch_array($resultado4);
                                        
                                        ?>
                                        <center><img src="<?php echo $arreglo2[2]; ?>" width ="105" height="105"></center>
                                        </td>
                                        <td>
                                        <center>
                                        <a href="<?php if( $arreglo2[0]<>''){
                                                echo 'imagenes_ver.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>"
                                            data-togle="tooltip" data-placement="top" title="Ver">
                                            <button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="<?php if( $arreglo2[0]<>''){
                                                echo 'imagenes_modificar.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>"
                                            data-togle="tooltip" data-placement="top" title="Modificar">                                    
                                                <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="<?php if( $arreglo2[0]<>''){
                                                echo 'imagenes_eliminar.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>"
                                            data-togle="tooltip" data-placement="top" title="Eliminar">
                                            <button name="button" class="btn btn-danger" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </a>
                                        </center>
                                        </td>
                                    </tr>
                                   
                            <?php
                           
                                }while($arreglo2 = mysqli_fetch_array($ejecuta2));
                            }
                            ?>
                            </table>
                            <br>
                            <a href="../productos/productos.php" target="marco">
                            <P align="right"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button>
                            </a>
                            <a href="<?php if( $paso >= 0){
                                                echo 'imagenes_agregar.php?key='.urlencode($paso);
                                            } 
                                           ?>">
                                <button name="button" type="button" class="btn btn-success"><i class="fa fa-address-book-o" aria-hidden="true">Agregar Imagen</i></button>
                            </a>  
                        </P>
                        <br>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php 
                    if($pagina!=1){
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo 1; ?>"><<</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina-1; ?>"><</a>
                    </li>
                    <?php
                    }
                    for($i=1; $i<=$totalPaginas; $i++){
                        if($i==$pagina){
                            echo'<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';    
                        }
                        else{
                            echo'<li class="page-item "><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>'; 
                        }
                    }
                    if($pagina !=$totalPaginas){
                    ?>
                    <li class="page-item">
                    <a class="page-link" href="?pagina=<?php echo $pagina+1; ?>">></a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">>></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
            </section>
          </div>
        </form>
    </div>
</body>
</html>