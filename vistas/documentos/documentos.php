<?php
include "../../conexion/conectar.php";
if ($_POST) {
    $obj->nombre_documento = $_POST['nombre_documento'];
}
$cone = new conexion();
$c = $cone->conectando();
$query5 = "select count(*) as totalRegistros from tipo_documentos";
$ejecuta5 = mysqli_query($c, $query5);
$arreglo5 = mysqli_fetch_array($ejecuta5);
$totalRegistros = $arreglo5['totalRegistros'];
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

if (isset($_POST['buscar'])) {
    $query6 = "select * from tipo_documentos where nombre_documento like '%$obj->nombre_documento%' limit $desde, $maximoRegistros";
    $ejecuta6 = mysqli_query($c, $query6);
    $arreglo6 = mysqli_fetch_array($ejecuta6);
} else {
    $query6 = "select * from tipo_documentos limit $desde, $maximoRegistros";
    $ejecuta6 = mysqli_query($c, $query6);
    $arreglo6 = mysqli_fetch_array($ejecuta6);
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
    <title>Documentos</title>
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
                 <th><h2><i class="fa fa-id-card-o fa-2x" aria-hidden="true"></i>   Documentos</h2></th>
               </tr>
             </thead>
            </table>
        </div>
        <form action="" name="documentos" method="POST">
                <div class="campo" id="filtropro">
                 <nav class="navbar navbar-expand-lg bg-light">
                    <form class="d-flex" id="buscar" role="search">
                        <input  class="form-control me-2" type="search" name="nombre_documento" id="nombre_documento" placeholder="Digite el Nombre" aria-label="Search"/>
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
                                    <center> Codigo </center>
                                </th>
                                <th>
                                    <center>Nombre Documento</center>
                                </th>
                                <th>
                                    <center>Acronimo Documento</center>
                                </th>
                                <th>
                                    <center>Estado</center>
                                </th>
                                <th>
                                    <center>Acciones</center>
                                </th>
                            </tr>
                             <?php
                              if ($arreglo6 == 0) {
                              echo "no hay registros";
                              } else {
                              do {
                             ?>
                                <tr>
                                    <td><?php echo $arreglo6[0] ?></td>
                                    <td><?php echo $arreglo6[1] ?></td>
                                    <td><?php echo $arreglo6[2] ?></td>
                                    <td><?php echo $arreglo6[3] ?></td>
                                    <td>
                                     <center>
                                        <a href="<?php if ($arreglo6[0] != '') {
                                             echo 'documentos_ver.php?key=' . urlencode($arreglo6[0]);
                                          }
                                          ?>"
                                             data-toggle="tooltip" data-placement="top" title="Ver">
                                             <button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?php if ($arreglo6[0] != '') {
                                             echo 'documentos_modificar.php?key=' . urlencode($arreglo6[0]);
                                             }
                                             ?>"
                                              data-toggle="tooltip" data-placement="top" title="Modificar">
                                              <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?php if ($arreglo6[0] != "") {
                                              echo 'documentos_eliminar.php?key=' . urlencode($arreglo6[0]);
                                              }
                                              ?>"
                                              data-toggle="tooltip" data-placement="top" title="Eliminar">
                                              <button name="eliminar"type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </a>      
                                     <center>
                                    </td>
                                </tr>

                            <?php
                             } while ($arreglo6 = mysqli_fetch_array($ejecuta6));
                             }
                             ?>
                        </table>
                        <br>
                         <P align="right"><a href="../login/framework.php" target="marco" class="full-width"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                            <a href="documentos_agregar.php" target="marco">
                                <button name="agregar" class="btn btn-success" type="button"><i class="fa fa-address-book-o" aria-hidden="true">Agregar Categoria</i></button>
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

