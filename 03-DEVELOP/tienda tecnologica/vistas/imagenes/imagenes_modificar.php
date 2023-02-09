<?php
include('../../conexion/conectar.php');
include('../../controlador/imagenescontrolador.php'); 
$obj = new imagenes();
if($_POST){

    $obj->id_imagen = $_POST['id_imagen'];
    $obj->id_producto = $_POST['id_producto'];
    $obj->url = $_FILES['url']['tmp_name'];
}
$key = $_GET['key'];
echo $key;
$conet = new conexion();
$c = $conet->conectando();
$query="select * from imagenes where id_imagen = '$key'";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$obj->id_imagen = $arreglo[0];
$obj->id_producto = $arreglo[1];
$obj->url = $arreglo[2];
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
    <title>Modificar Imagen</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
            <center><img src="../../img/logo_2_T_T.jpg" width="750px" height="225px" alt=""></center>
            <br>
            <br>
            <h2>Modificar Imagen</h2>
            <br>
            <br>
            <form action="" name="imagenes_modificar" method="POST" enctype="multipart/form-data">
                            <table class="table table-striped table table-bordered border-success table table-hover">
                                <tr>
                                    <th>
                                        <center>Código</center>
                                    </th>
                                    <td>
                                        <center><input type="text" name="id_imagen" id="id_imagen" value="<?php echo $obj->id_imagen  ?>"readOnly></center>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <center>Nombre producto</center>
                                    </th>
                                    <td>
                                        <center><input type="text" name="id_producto" id="id_producto"  value="<?php echo $obj->id_producto  ?>"></center>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <center>URL</center>
                                    </th>
                                    <td>
                                        <center><input type="file" name="url" id="url"  value="<?php echo $obj->url ?>"></center>
                                    </td>
                                </tr>
                           </table>
                           <P align="right"><a href="imagenes.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                           <a href="imagenes.php"><button type="submit" class="btn btn-success" name="modifica"><i class="fa fa-check" aria-hidden="true">Guardar</i></button>
                           </a>
                           </P>                      
            </form>
    </div>
</body>
</html>