<?php
include("../../conexion/conectar.php");
if ($_POST) {
    $obj->id_venta = $_POST['id_venta'];
}
$cone = new conexion();
$c = $cone->conectando();
$query = "select count(*) as totalRegistros from ventas";
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

if (isset($_POST['buscar'])) {
    $query2 = "select * from ventas where id_venta like '%$obj->id_venta%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from ventas limit $desde, $maximoRegistros";
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
    <title>Ventas</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="../../js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">

        <head>
            <center><img src="../../img/logo_2_T_T.jpg" width="600px" height="150px" alt=""></center>
            <br>
            <br>
            <h2>Ventas</h2>
        </head>
        <br>
        <form action="" name="ventas" method="POST">
            <div class="campo" id="filtropro">
                <center>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" name="id_venta" id="id_venta" placeholder="Digite el codigo de venta" aria-label="Search">
                        <button type="submit" name="buscar" id="buscar" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true">Buscar</i></button>
                    </form>
                </center>
            </div>
            <div class="marco" align="left">
                <button type="button" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
            </div>
            <section>
                <table class="table-light table table-striped table table-bordered border-success table table-hover">
                    <tr class="table-info table table-striped table table-bordered border-success table table-hover">
                        <th>
                            <center>Id venta</center>
                        </th>
                        <th>
                            <center>Id pago</center>
                        </th>
                        <th>
                            <center>Id pedido</center>
                        </th>
                        <th>
                            <center>Fecha</center>
                        </th>
                        <th>
                            <center>Hora</center>
                        </th>
                        <th>
                            <center>Valor Total</center>
                        </th>
                        <th>
                            <center>Estado</center>
                        </th>
                        <th>
                            <center>Aciones</center>
                        </th>
                    </tr>
                    <?php
                    if ($arreglo2 == 0) {
                        echo "no hay registros";
                    } else {
                        do {
                    ?>
                            <tr>
                                <td><?php echo $arreglo2[0] ?></td>
                                <td><?php echo $arreglo2[1] ?></td>
                                <td><?php echo $arreglo2[2] ?></td>
                                <td><?php echo $arreglo2[3] ?></td>
                                <td><?php echo $arreglo2[4] ?></td>
                                <td><?php echo $arreglo2[5] ?></td>
                                <td><?php echo $arreglo2[6] ?></td>
                                <td>
                                    <a href="<?php if ($arreglo2[0] <> '') {
                                                    echo 'ver_ventas.php?key=' . urlencode($arreglo2[0]);
                                                }

                                                ?>" <center><button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true">Ver</i></button>
                                    </a>
                                    <a href="<?php if ($arreglo2[0] <> '') {
                                                    echo 'modificar_ventas.php?key=' . urlencode($arreglo2[0]);
                                                }

                                                ?>" <button name="modifica" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true">Modificar</i></button>
                                    </a>
                                    </center>
                                </td>
                            </tr>

                    <?php
                        } while ($arreglo2 = mysqli_fetch_array($ejecuta2));
                    }
                    ?>
                </table>
                <br>
                <P align="right"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button>
                    <!--a href="categorias_agregar.php" target="marco">
                        <button name="agregar" class="btn btn-success" type="button"><i class="fa fa-address-book-o" aria-hidden="true">Agregar Categoria</i></button>
                    </a-->
                </P>
                <br>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <?php
                        if ($pagina != 1) {
                        ?>
                            <li class="page-item ">
                                <a class="page-link" href="?pagina=<?php echo 1; ?>">
                                    << </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="?pagina=<?php echo $pagina - 1; ?>">
                                    <<< </a>
                            </li>
                        <?php
                        }
                        for ($i = 1; $i <= $totalPaginas; $i++) {
                            if ($i == $pagina) {
                                echo '<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
                            } else {
                                echo '<li class="page-item "><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
                            }
                        }
                        if ($pagina != $totalPaginas) {
                        ?>
                            <li class="page-item">
                                <a class="page-link" href="?pagina=<?php echo $pagina + 1; ?>">>></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </section>
        </form>
    </div>
</body>

</html>