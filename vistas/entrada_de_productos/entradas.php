<?php
include "../../conexion/conectar.php";
if ($_POST) {
    $obj->proveedor_producto_entrada = $_POST['proveedor_producto_entrada'];
}
$cone = new conexion();
$c = $cone->conectando();
$query = "select count(*) as totalRegistros from entradas_productos";
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
    $query2 = "select * from entradas_productos where proveedor_producto_entrada like '%$obj->proveedor_producto_entrada%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from entradas_productos limit $desde, $maximoRegistros";
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
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <title>Entrada De Prodcutos</title>
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
                  <th><h2><i class="fa fa-share fa-2x" aria-hidden="true"></i>   Entrada De Productos</h2><th>
                </tr> 
             </thead>
            </table>
        </div>
        <form action="" name="entradas" method="POST">
                <div class="campo" id="filtropro">
                  <nav class="navbar navbar-expand-lg bg-light">
                    <form class="d-flex" id="buscar" role="search">
                        <input  class="form-control me-2" type="search" name="proveedor" id="proveedor" placeholder="Digite el Nombre" aria-label="Search"/>
                        <button type="submit" name="buscar" id="buscar" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true">Buscar</i></button>
                    </form>
                  </nav>
                    <div class="marco" align="left">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
                    </div>
                    <section>
                        <table class="table table-striped table-hover table table-bordered table-sm shadow">
                            <tr>
                                <th>
                                  <center>Id Entrada</center>
                                </th>
                                <th>
                                  <center>Nombre Producto</center>
                                </th>
                                <th>
                                  <center>Proveedor</center>
                                </th>
                                <th>
                                  <center>Cantidad Entrada</center>
                                </th>
                                <th>
                                  <center>Valor Proveedor</center>
                                </th>
                                <th>
                                  <center>Acciones</center>
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
                                <td>
                                    <?php
                                        $query = "select nombre_producto from productos where id_producto ='$arreglo2[1]'";
                                        $resultado = mysqli_query($c, $query);
                                        $arreglo = mysqli_fetch_array($resultado);
                                        echo $arreglo[0];
                                    ?>
                                </td>
                                <td><?php echo $arreglo2[2] ?></td>
                                <td><?php echo $arreglo2[3] ?></td>
                                <td><?php echo $arreglo2[4] ?></td>
                                <td>
                                    <a href="<?php if ($arreglo2[0] != '') {
                                        echo 'entradas_ver.php?key=' . urlencode($arreglo2[0]);
                                        }
                                        ?>"
                                          data-toggle="tooltip" data-placement="top" title="Ver">
                                          <button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="<?php if ($arreglo2[0] != '') {
                                        echo 'entradas_modificar.php?key=' . urlencode($arreglo2[0]);
                                        }
                                        ?>"
                                        data-toggle="tooltip" data-placement="top" title="Modificar">
                                        <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="<?php if ($arreglo2[0] != "") {
                                              echo 'entradas_eliminar.php?key=' . urlencode($arreglo2[0]);
                                              }
                                              ?>"
                                              data-toggle="tooltip" data-placement="top" title="Eliminar">
                                              <button name="eliminar"type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </a>
                                </td>
                            </tr>

                            <?php
                             } while ($arreglo2 = mysqli_fetch_array($ejecuta2));
                             }
                            ?>
                        </table>
                        <P align="right"><a href="../login/framework.php" target="marco" class="full-width"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                            <a href="entradas_agregar.php" target="marco">
                                <button name="agregar" class="btn btn-success" type="button"><i class="fa fa-address-book-o" aria-hidden="true">Crear Entrada</i></button>
                            </a>
                        </P>
                        <br>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <?php
                                  if ($pagina != 1) {
                                ?>
                                    <li class="page-item ">
                                        <a class="page-link" href="?pagina=<?php echo 1; ?>">
                                            << 
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="?pagina=<?php echo $pagina - 1; ?>">
                                            <<< 
                                        </a>
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
                </div>
        </form>
    </div>
</body>
</html>


