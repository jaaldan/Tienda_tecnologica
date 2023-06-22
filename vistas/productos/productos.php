<?php
include("../../conexion/conectar.php");
?>


<?php
/*
session_start();
$varsesion = $_SESSION['CORREO_USUARIO'];
$c = new conexion();
$cone = $c->conectando();
$sql1 = "select roles.ID_ROL from usuarios INNER JOIN roles on usuarios.ID_ROL_USUARIO = roles.ID_ROL where usuarios.CORREO_USUARIO = '$varsesion' ";
$rs1 = mysqli_query($cone,$sql1);
$arreglo1 = mysqli_fetch_row($rs1);
if($arreglo1[0] !=1){
    echo 'ESTE USUARIO NO TIENE AUTORIZACION PARA ACCEDER A ESTA FUNCIONALIDAD';

die();
}
*/
?>

<?php
if ($_POST) {
    $obj->nombre_producto = $_POST['nombre_producto'];
}
$conet = new conexion();
$c = $conet->conectando();
$query = "select count(*) as totalRegistros from productos";
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
    $query2 = "select * from productos where nombre_producto like '%$obj->nombre_producto%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from productos limit $desde, $maximoRegistros";
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
    <title>Productos</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
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
                        <th><h2><i class="fa fa-mobile fa-2x" aria-hidden="true"></i> Productos</h2></th>
                    </tr>
                </thead>
            </table>
        </div>
        <form action="" name="productos" method="POST">
        <div class="campo" id="filtropro">
        <nav class="navbar navbar-expand-lg bg-light">
            <form class="d-flex" id="search" role="search">
                <input class="form-control me-2" type="search" name="nombre_producto" placeholder="Digite el nombre del producto" aria-label="Search">
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
                        <center>Nombre categoria</center>
                    </th>
                    <th>
                        <center>Marca</center>
                    </th>
                    <th>
                        <center>Color</center>
                    </th>
                    <th>
                        <center>PVP con IVA</center>
                    </th>
                    <th>
                        <center>Salidas</center>
                    </th>
                    <th>
                        <center>Cantidad(Stock)</center>
                    </th>
                    <th>
                        <center>Descripción</center>
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
                                        <td><?php echo $arreglo2[0] ?></td>
                                        <td><?php echo $arreglo2[1] ?></td>
                                        <td><?php 
                                        $query3="select nombre_categoria from categorias where id_categoria = '$arreglo2[2]'";
                                        $resultado3=mysqli_query($c,$query3);
                                        $arreglo3 = mysqli_fetch_array($resultado3);
                                        echo $arreglo3[0]; ?></td>
                                        <td><?php echo $arreglo2[3] ?></td>
                                        <td><?php echo $arreglo2[4] ?></td>
                                        <td>$<?php echo number_format($arreglo2[5], 2, '.', ',');?></td>
                                        <td><?php echo $arreglo2[6] ?></td>
                                        <td><?php echo $arreglo2[7] ?></td>
                                        <td><?php echo $arreglo2[8] ?></td>
                                        <td>
                                        <a href="<?php if( $arreglo2[0]<>''){
                                                echo 'productos_ver.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>"
                                            data-togle="tooltip" data-placement="top" title="Ver">
                                            <button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="<?php if( $arreglo2[0]<>''){
                                                echo 'productos_modificar.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>"
                                            data-togle="tooltip" data-placement="top" title="Modificar">                                    
                                                <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="<?php if($arreglo2[0]<>''){
                                                echo '../imagenes/imagenes.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>"
                                            data-togle="tooltip" data-placement="top" title="Imagen">                                    
                                                <button name="imagen" class="btn btn-success" type="button"><i class="fa fa-file-image-o" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="<?php if( $arreglo2[0]<>''){
                                                echo 'productos_eliminar.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>"
                                            data-togle="tooltip" data-placement="top" title="Eliminar">
                                            <button name="button" class="btn btn-danger" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                                }while($arreglo2 = mysqli_fetch_array($ejecuta2));
                            }
                            ?>
                            </table>
                            <br>
                            <P align="right"><a href="../login/framework.php" target="marco">
                            <button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button>
                            </a>
                            <a href="productos_agregar.php" target="marco">
                            <button type="button" class="btn btn-success"><i class="fa fa-address-book-o" aria-hidden="true">Agregar Producto</i></button>
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
                    <li class="page-item ">
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