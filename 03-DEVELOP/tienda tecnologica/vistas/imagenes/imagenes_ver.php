<?php
include("../../conexion/conectar.php");
include("../../controlador/imagenescontrolador.php");

$obj = new imagenes();
if ($_POST) {

    $obj->id_imagen = $_POST['id_imagen'];
    $obj->id_producto = $_POST['id_producto'];
    $obj->url = $_POST['url'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from imagenes where id_imagen = '$key' ";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);


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
    <title>Ver Imagen</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center><img src="../../img/logo_2_T_T.jpg" width="750px" height="225px" alt=""></center>
        <br>
        <br>
        <h2>Ver Imagen</h2>
        <br>
        <br>
        <form action="" name="imagenes_ver" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Código</center>
                        </th>
                        <td>
                            <center><input type="number" name="id_imagen" id="id_imagen" value="<?php echo $arreglo2[0]?>" placeholder="El Codigo es Asignado por el Sistema" maxlength="100" size="100" readonly></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombre producto</center>
                        </th>
                        <td>
                            <center><input type="number" name="id_producto" id="id_producto"  value="<?php echo $arreglo2[1]?>" placeholder="Digite el Nombre de la categoria" maxlength="100" size="100" readonly></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>URL</center>
                        </th>
                        <td>
                            <center><input type="image" name="url" id="url"  value= <img src="<?php echo $arreglo2[2]; ?>" width="250" height="250" readonly></center>
                        </td>            
                    </tr>
                </table>
                <a href="imagenes.php" target="marco"> 
                    <P align="right"> <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button>
                </a>
                </P>
            </center>
        </form>
    </div>
</body>
</html>