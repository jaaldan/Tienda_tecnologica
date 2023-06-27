<?php
include("../../conexion/conectar.php");
if ($_POST) {
  $obj->nombre_transportadora = $_POST['nombre_transportadora'];
}
$cone = new conexion();
$c = $cone->conectando();
$query = "select count(*) as totalRegistros from transportadoras";
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
  $query2 = "select * from transportadoras where nombre_transportadora like '%$obj->nombre_transportadora%' limit $desde, $maximoRegistros";
  $ejecuta2 = mysqli_query($c, $query2);
  $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
  $query2 = "select * from transportadoras limit $desde, $maximoRegistros";
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
  <title>Transportadora</title>

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
                 <th><h2><i class="fa fa-truck fa-2x" aria-hidden="true"></i>   Transportadora</h2></th>
               </tr>
        </thead>
      </table>
    </div>
    
    <form action="" name="transportadoras" method="POST">
      <div class="campo" id="filtropro">
        <nav class="navbar navbar-expand-lg bg-light">
          <form class="d-flex" role="search">
             <input class="form-control me-2" type="search" name="nombre_transportadora" id="nombre_transportadora" placeholder="Digite el Nombre o Código de la Transportadora" aria-label="Search" />
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
              <center>Codigo transportadora</center>
            </th>
            <th>
              <center>Nombre transportadora</center>
            </th>
            <th>
              <center>Telefono</center>
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
             } else {
             do {
            ?>
              <tr>
                <td><?php echo $arreglo2[0] ?></td>
                <td><?php echo $arreglo2[1] ?></td>
                <td><?php echo $arreglo2[2] ?></td>
                <td><?php echo $arreglo2[3] ?></td>
                <td>
                  <center>
                    <a href="<?php if ($arreglo2[0] <> '') {
                              echo 'ver_transportadora.php?key=' . urlencode($arreglo2[0]);
                            }
                            ?>"
                            data-toggle="tooltip" data-placement="top" title="Ver">
                            <button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    </a>
                    <a href="<?php if ($arreglo2[0] <> '') {
                              echo 'modificar_transportadora.php?key=' . urlencode($arreglo2[0]);
                            }
                            ?>"
                             data-toggle="tooltip" data-placement="top" title="Modificar">
                             <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    </a>
                    <a href="<?php if ($arreglo2[0] != "") {
                                              echo 'transportadora_eliminar.php?key=' . urlencode($arreglo2[0]);
                                              }
                                              ?>"
                                              data-toggle="tooltip" data-placement="top" title="Eliminar">
                                              <button name="eliminar"type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </a>
                  </center>
                </td>
              </tr>

               <?php
                 } while ($arreglo2 = mysqli_fetch_array($ejecuta2));
                 }
                ?>
        </table>
        <div>
           <P align="right"><a href="../login/framework.php" target="marco" class="full-width"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
          <a href="agregar_transportadora.php" target="marco">
            <button name="agregar" class="btn btn-success" type="button"><i class="fa fa-address-book-o" aria-hidden="true">Agregar Transportadora</i></button>
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
  </div>
</body>

</html>
<!-- Modal cambiar estado
    <div class="modal fade"  id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cambiar estado de la transportadora</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section>
                    <br>
                        <center>
                                        <p>Señor usuario,</p>
                                        <p>¿Esta seguro de cambiar el estado de esta transportadora?
                                        </p>
                                        <table class="table-light table table-striped table table-bordered border-success table table-hover">
                                        <tr class="table-info table table-striped table table-bordered border-success table table-hover">
                                            <th><center>Id transportadora</center></th>
                                            <th><center>Nombre empresa transportadora</center></th>
                                            <th><center>Estado</center></th>
                                        </tr>
                                        <tr>
                                            <td><center>3</center></td>
                                            <td><center>472</center></td>
                                            <td><center><select name="estado" id="estado">
                                            <option value="seleccionar">Seleccione el estado</option>
                                            <option value="activo">Activo</option>
                                            <option value="inactivo">Inactivo</option>
                            </select></center></td>
                                        </tr>
                                    </table>
                                    <P align="right"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                                        <button type="button" class="btn btn-success"><i class="fa fa-truck" aria-hidden="true">Aceptar</i></button></P>
                                </center>
            </div>
          </div>
        </div>
      </div> -->