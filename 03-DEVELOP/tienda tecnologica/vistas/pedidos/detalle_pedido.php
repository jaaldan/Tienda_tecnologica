<?php
include("../../conexion/conectar.php");
if ($_POST) {
    $obj->id_pedido_detalle = $_POST['id_pedido_detalle'];
}
$conet = new conexion();
$c = $conet->conectando();
$query = "select count(*) as totalRegistros from detalle_pedidos";
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
echo $totalPaginas;
if (isset($_POST['search'])) {
    $query2 = "select * from detalle_pedidos where id_pedido_detalle like '%$obj->id_pedido_detalle%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from detalle_pedidos limit $desde, $maximoRegistros";
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
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <head>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
            <br>
            <br>
            <h2>Detalle del pedido</h2>
        </head>
        <form action="" name="detalle_pedido" method="POST">
                <div class="campo" id="filtropro">
                <nav class="navbar navbar-expand-lg bg-">
                <div class="container-fluid">
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="id_pedido" placeholder="Digite el numero del pedido" aria-label="Search">
                    <button class="btn btn-primary" name="search" type="submit"><i class="fa fa-search"
                            aria-hidden="true">Buscar</i></button>
                </form>
        </div>
        </nav>
        <div class="marco"align="left">
                <button type="button" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
            </div>
        <section>
            <table class="table-light table table-striped table table-bordered border-success table table-hover">
                <tr class="table-info table table-striped table table-bordered border-success table table-hover">
                    <th>
                        <center>Código</center>
                    </th>
                    <th>
                        <center>Cliente</center>
                    </th>
                    <th>
                        <center>Dirección</center>
                    </th>
                    <th>
                        <center>Fecha</center>
                    </th>
                    <th>
                        <center>Producto(s)</center>
                    </th>
                    <th>
                        <center>Cantidad</center>
                    </th>
                    <th>
                        <center>Valor IVA</center>
                    </th>
                    <th>
                        <center>Precio de venta</center>
                    </th>
                    <th>
                        <center>Estado</center>
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
                                        $query3="select nombres_cliente, apellidos_cliente from clientes where id_cliente = '$arreglo2[1]'";
                                        $resultado3=mysqli_query($c,$query3);
                                        $arreglo3 = mysqli_fetch_array($resultado3);
                                        echo $arreglo3[0] . " "; 
                                        echo $arreglo3[1]; ?></td>
                                        <td><?php echo $arreglo2[2] ?></td>
                                        <td><?php echo $arreglo2[3] ?></td>
                                        <td><?php echo $arreglo4[4] ?></td>
                                        <td><?php echo $arreglo4[5] ?></td>
                                        <td><?php echo $arreglo4[6] ?></td>
                                        <td><?php echo $arreglo4[7] ?></td>
                                        <td><?php echo $arreglo2[8] ?></td>
                                        <td>
                                        <center>
                                            <a href="<?php if( $arreglo2[0]<>""){
                                                echo 'detalle_pedido.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>">
                                            <button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true">Ver</i></button>
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
            <br>
            <P align="right"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button>
                            <a href="agregar_pedido.php" target="marco">
                                <button name="agregar" class="btn btn-success" type="button"><i class="fa fa-address-book-o" aria-hidden="true">Agregar Pedido</i></button>
                            </a>
                        </P>
                        <br>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item disabled">
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
            </div>
          </div>
        </form>
    </div>
</body>
</html>