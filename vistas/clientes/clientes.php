<?php
include "../../conexion/conectar.php";
if ($_POST) {
    $obj->id_cliente = $_POST['id_cliente'];
}
//$key = $_GET['key'];
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
//echo $totalPaginas;

if (isset($_POST['buscar'])) {
    $query3 = "select * from clientes where id_cliente like '%$obj->id_cliente%' limit $desde, $maximoRegistros";
    $ejecuta3 = mysqli_query($c, $query3);
    $arreglo3 = mysqli_fetch_array($ejecuta3);
} else {
    // $query3 = "select * from clientes 
    // where numero_documento_cliente = '$key' 
    // limit $desde, $maximoRegistros";
    $query3 = "select * from clientes  
    limit $desde, $maximoRegistros";
    $ejecuta3 = mysqli_query($c, $query3);
    $arreglo3 = mysqli_fetch_array($ejecuta3);
}

//$paso = $key;

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
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
     <table class="table ">
     <thead>
        <head>
         <tr>
          <th><center><img src="../../img/logo_2_T_T.jpg" width="550px" height="175px" alt=""></center></th>
         </tr>
         <tr>
         <th><h2><i class="fa fa-users fa-2x" aria-hidden="true"></i>   Clientes</h2></th>
         </tr>
        </head>
      </thead>
     </table>
        <form action="" name="clientes" method="POST">
                <div class="campo" id="filtropro">
                  <nav class="navbar navbar-expand-lg bg-light">
                    <form class="d-flex" id="buscar" role="search">
                        <input class="form-control me-2" type="search" name="id_imagen" placeholder="Digite el código de la imagen" aria-label="Search">
                        <button type="submit" class="btn btn-primary" name="search"><i class="fa fa-search" aria-hidden="true">Buscar</button></i>
                    </form>
                  </nav>
                    <div class="marco" align="left">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
                    </div>
                    <section>
                        <table class="table table-striped table-hover table table-bordered table-sm shadow">
                            <tr>
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
                                        <td><?php  
                                        //$query4="select imagen_cliente from clientes where id_cliente = '$arreglo3[11]'";
                                        //$resultado4=mysqli_query($c,$query4);
                                        //$arreglo4 = mysqli_fetch_array($resultado4);
                                        ?>
                                        <center><img src="<?php echo $arreglo3[11]; ?>" width ="105" height="105"></center>
                                        </td>
                                        <td>
                                         <center>   
                                         <a href="<?php if ($arreglo3[0] != '') {
                                           echo 'clientes_ver.php?key=' . urlencode($arreglo3[0]);
                                           }
                                           ?>"
                                             data-toggle="tooltip" data-placement="top" title="Ver">
                                            <button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                         </a>

                                         <a href="<?php if ($arreglo3[0] != '') {
                                           echo 'clientes_modificar.php?key=' . urlencode($arreglo3[0]);
                                           }
                                           ?>"
                                             data-toggle="tooltip" data-placement="top" title="Modificar">
                                            <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                         </a>
                                         <a href="<?php if ($arreglo3[0] != "") {
                                              echo 'clientes_eliminar.php?key=' . urlencode($arreglo3[0]);
                                              }
                                              ?>"
                                              data-toggle="tooltip" data-placement="top" title="Eliminar">
                                              <button name="eliminar"type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                         </a>
                                         </center>
                                        </td>
                                    </tr>

                            <?php
                              } while ($arreglo3 = mysqli_fetch_array($ejecuta3));
                              }
                            ?>
                        </table>
                        <div>
                         <P align="right"><a href="../login/framework.php" target="marco" class="full-width"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                            <a href="clientes_agregar.php" target="marco">
                                <button name="agregar" class="btn btn-success" type="button"><i class="fa fa-address-book-o" aria-hidden="true">Agregar Cliente</i></button>
                            </a>
                         </P>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
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

