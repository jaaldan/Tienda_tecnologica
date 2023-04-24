<?php
include "../../conexion/conectar.php";
if ($_POST) {
    $obj->numero_documento = $_POST['numero_documento_cliente'];
}
$cone = new conexion();
$c = $cone->conectando();
$query_a = "select count(*) as totalRegistros from clientes";
$ejecuta_a = mysqli_query($c, $query_a);
$arreglo_a = mysqli_fetch_array($ejecuta_a);
$totalRegistros = $arreglo_a['totalRegistros'];
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
    $query3 = "select * from clientes where numero_documento_cliente like '%$obj->numero_documento%' limit $desde, $maximoRegistros";
    $ejecuta3 = mysqli_query($c, $query3);
    $arreglo3 = mysqli_fetch_array($ejecuta3);
} else {
    $query3 = "select * from clientes limit $desde, $maximoRegistros";
    $ejecuta3 = mysqli_query($c, $query3);
    $arreglo3 = mysqli_fetch_array($ejecuta3);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientes</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    </head>
    <body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <head>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
            <br>
            <br>
            <h2>Clientes</h2>
            <br>
            <br>
        </head>
        <form action="" name="clientes" method="POST">
                <div class="campo" id="filtropro">
                    <form class="d-flex" id="buscar" role="search">
                        <input  class="form-control me-2" type="search" name="numero_documento" id="numero_documento" placeholder="Digite el Numero del documento" aria-label="Search"/>
                        <button type="submit" name="buscar" id="buscar" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true">Buscar</i></button>
                    </form>
                    <div class="marco" align="left">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
                    </div>
                    <section>
                        <table class="table-light table table-striped table table-bordered border-success table table-hover">
                            <tr class="table-info table table-striped table table-bordered border-success table table-hover">
                                <th>
                                    <center>Codigo</center>
                                </th>
                                <th>
                                    <center>Rol</center>
                                </th>
                                <th>
                                 <center>Nombres</center>
                                </th>
                                <th>
                                 <center>Apellidos</center>
                                </th>
                                <th>
                                 <center>Tipo Documento</center>
                                </th>
                                <th>
                                 <center>Numero Documento</center>
                                </th>
                                <th>
                                 <center>Correo Electronico</center>
                                </th>
                                <th>
                                 <center>Telefono</center>
                                </th>
                                <th>
                                 <center>Direccion</center>
                                </th>
                                <th>
                                 <center>Contraseña</center>
                                </th>
                                <th>
                                 <center>Estado</center>
                                </th>
                                <th>
                                 <center>Imagen</center>
                                </th>
                                <th>
                                 <center>Acciones</center>
                                </th>
                            </tr>
                            <?php
if ($arreglo3 == 0) {
    echo "no hay registros";
} else {
    do {
        ?>
                                    <tr>
                                        <td><?php echo $arreglo3[0] ?></td>
                                        <td><?php
$query = "select nombre_rol from roles where id_rol ='$arreglo3[1]'";
        $resultado = mysqli_query($c, $query);
        $arreglo = mysqli_fetch_array($resultado);
        echo $arreglo[0];
        ?></td>
                                        <td><?php echo $arreglo3[2] ?></td>
                                        <td><?php echo $arreglo3[3] ?></td>
                                        <td><?php
$query1 = "select nombre_documento from tipo_documentos where id_tipo_documento ='$arreglo3[4]'";
        $resultado1 = mysqli_query($c, $query1);
        $arreglo1 = mysqli_fetch_array($resultado1);
        echo $arreglo1[0];
        ?></td>
                                        <td><?php echo $arreglo3[5] ?></td>
                                        <td><?php echo $arreglo3[6] ?></td>
                                        <td><?php echo $arreglo3[7] ?></td>
                                        <td><?php echo $arreglo3[8] ?></td>
                                        <td><?php echo $arreglo3[9] ?></td>
                                        <td><?php echo $arreglo3[10] ?></td>
                                        <td><?php echo $arreglo3[11] ?></td>
                                        <td>
                                        <a href="<?php if ($arreglo3[0] != '') {
            echo 'clientes_ver.php?key=' . urlencode($arreglo3[0]);
        }

        ?>"
                                                <center><button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true">Ver</i></button>
                                            </a>
                                            <a href="<?php if ($arreglo3[0] != '') {
            echo 'clientes_modificar.php?key=' . urlencode($arreglo3[0]);
        }

        ?>"
                                                <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true">Modificar</i></button>
                                            </a>
                                            </center>
                                        </td>
                                    </tr>

                            <?php
} while ($arreglo3 = mysqli_fetch_array($ejecuta3));
}
?>
                        </table>
                        <br>
                        <P align="right"><a href="../../framework.php" target="marco" class="full-width"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                            <a href="clientes_agregar.php" target="marco">
                                <button name="agregar" class="btn btn-success" type="button"><i class="fa fa-address-book-o" aria-hidden="true">Agregar Cliente</i></button>
                            </a>
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
                </div>
            </form>
    </div>
</body>
</html>

