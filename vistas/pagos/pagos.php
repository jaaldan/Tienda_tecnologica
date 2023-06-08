<?php
include("../../conexion/conectar.php");
if ($_POST) {
    $obj->metodo_pago = $_POST['metodo_pago'];
}
$conet = new conexion();
$c = $conet->conectando();
$query = "select count(*) as totalRegistros from pagos";
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
    $query2 = "select * from pagos where metodo_pago like '%$obj->metodo_pago%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from pagos limit $desde, $maximoRegistros";
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
    <title>Pagos</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <head>
            <center><img src="../../img/logo_2_T_T.jpg" width="750px" height="225px" alt=""></center>
            <br>
            <br>
            <h2>Métodos de Pago</h2>
        </head>
        <form action="" name="pagos" method="POST">
        <div class="campo" id="filtropro">
        <nav class="navbar navbar-expand-lg bg-">
           <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="metodo_pago"  placeholder="Ingrese el nombre del metodo de pago" aria-label="Search">
                <button type="submit" class="btn btn-primary btn-lg" name="search"><i class="fa fa-search" aria-hidden="true">Buscar</i></button>
              </form>
           </div>
        </nav>
            <div class="marco" align="left">
             <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-list-ul" aria-hidden="true">Listar</i></button>
            </div>
        <div class="table-responsive">
            <table class="table-light table table-striped table table-bordered border-success table table-hover">
                <tr class="table-info table table-striped table table-bordered border-success table table-hover">
                    <td>
                        <center>Código</center>
                    </td>
                    <td>
                        <center>Método de pago</center>
                    </td>
                    <td>
                        <center>Estado</center>
                    </td>
                    <td>
                        <center>Acciones</center>
                    </td>
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
                                        <td><?php echo $arreglo2[1] ?></td>
                                        <td><?php echo $arreglo2[2] ?></td>
                                        <td>
                                            <center>
                                            <a href="<?php if($arreglo2[0]<>""){
                                            echo "pagos_modificar.php?key=".urlencode($arreglo2[0]);
                                            }
                                            ?>">
                                            <button type="button" class="btn btn-warning btn-lg"><i class="fa fa-pencil" aria-hidden="true">Modificar</i></button>
                                            </a>
                                            <a href="<?php if( $arreglo2[0]<>''){
                                                echo 'pagos_eliminar.php?key='.urlencode($arreglo2[0]);
                                            } 
                                            ?>">
                                            <button name="button" class="btn btn-danger btn-lg" type="button"><i class="fa fa-trash" aria-hidden="true">Eliminar</i></button>
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

                            <a href="home.html">
                            <P align="right"><button name="button" class="btn btn-primary btn-lg" type="button"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button>
                            </a>
                            <a href="pagos_agregar.php" target="marco">
                                <button name="button" class="btn btn-success btn-lg"><i class="fa fa-address-book-o" aria-hidden="true">Agregar metodo de pago</i></button>
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
    </div>
</body>
</html>