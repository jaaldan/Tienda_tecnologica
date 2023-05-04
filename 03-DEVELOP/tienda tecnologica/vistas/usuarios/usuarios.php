<?php
include "../../conexion/conectar.php";
if ($_POST) {
    $obj->nombres = $_POST['nombres_usuario'];
}
$cone = new conexion();
$c = $cone->conectando();
$query = "select count(*) as totalRegistros from usuarios";
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
    $query2 = "select * from usuarios where nombres_usuario like '%$obj->nombres_usuario%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from usuarios limit $desde, $maximoRegistros";
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
    <title>usuarios</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">


<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">

        <head>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
            <br>
            <br>
            <h2>Usuarios</h2>
            <br>
            <br>
        </head>
        <form action="" name="usuarios" method="POST">
            <div class="campo" id="filtropro">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="nombres" id="nombres" placeholder="Digite el Nombre o Código del Usuario" aria-label="Search">
                    <button type="submit" name="buscar" id="buscar" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true">Buscar</i></button>
                </form>
            </div>
            <div class="marco" align="left">
                <button type="button" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
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
if ($arreglo2 == 0) {
    echo "no hay registros";
    ?>
                        <!--div class="alert alert-warning" role="alert">
                            <!-php echo "No hay registros" ?-->
                        <!--</div-->
                        <?php
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
                                <td><?php echo $arreglo2[7] ?></td>
                                <td><?php echo $arreglo2[8] ?></td>
                                <td><?php echo $arreglo2[9] ?></td>
                                <td><?php echo $arreglo2[10] ?></td>
                                <td><?php echo $arreglo2[11] ?></td>
                                <td>
                                    <a href="<?php if ($arreglo2[0] != '') {
            echo 'ver_usuario.php?key=' . urlencode($arreglo2[0]);
        }

        ?>">
                                        <center><button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true">Ver</i></button>
                                    </a>
                                    <a href="<?php if ($arreglo2[0] != '') {
            echo 'modificar_usuario.php?key=' . urlencode($arreglo2[0]);
        }

        ?>"><button name="modifica" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true">Modificar</i></button>
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
                    <a href="agregar_usuario.php" target="marco">
                        <button name="agregar" class="btn btn-success"><i class="fa fa-address-book-o" aria-hidden="true">Agregar usuario</i></button>
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


</body>

</html>