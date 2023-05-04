<?php
include("../../conexion/conectar.php");
if ($_POST) {
    $obj->METODO_PAGO = $_POST['METODO_PAGO'];
}
$conet = new conexion();
$c = $conet->conectando();
$query = "select count(*) as totalRegistros from PAGOS";
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
    $query2 = "select * from PAGOS where METODO_PAGO like '%$obj->METODO_PAGO%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
} else {
    $query2 = "select * from PAGOS limit $desde, $maximoRegistros";
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
    <title>Administracion</title>
</head>
<body>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                     <input class="form-control me-2" type="search" name="METODO_PAGO" placeholder="Digite el Nombre o Código de la Categoria" aria-label="Search">
                     <button class="btn btn-outline-success" name="search"  type="submit"><i class="fa fa-search" aria-hidden="true">Buscar</i></button>
                    </form>
                </div>
            </nav>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-sm shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
                            <td colspan="6" class="p-3 mb-2 bg-primary text-white"><h5>Lista de Pagos</h5></td>
                        </tr>
                    </thead>
                    <tbody >
                        <tr class="table-secondary">
                            <td>Código</td>
                            <td>Nombre</td>
                            <td>Estado</td>
                            <td>Acciones</td>
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
                    </tbody>
                </table>
            </div>    
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <?php 
                    if($pagina!=1){
                    ?>
                    <li class="page-item ">
                        <a class="page-link" href="?pagina=<?php echo 1; ?>"><</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina-1; ?>"><<</a>
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
                        <a class="page-link" href="?pagina=<?php echo $pagina+1; ?>">>></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </form>
    </div>
</body>
</html>