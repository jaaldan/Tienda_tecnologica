<?php
include('../../conexion/conectar.php');
include("../../controlador/imagenescontrolador.php");
$obj = new imagenes();
if($_POST){

    $obj->id_imagen = $_POST['id_imagen'];
    $obj->id_producto_imagen = $_POST['id_producto_imagen'];
    $obj->imagen_producto = $_FILES['imagen_producto']['tmp_name'];
}
$key = $_GET['key'];
//echo $key;

/*$conet = new conexion();
$c = $conet->conectando();
$query2 = "select * from imagenes where id_imagen = '$key' ";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);
*/
?>

<?php
/*$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from productos";
$query = mysqli_query($c, $sql);
$r = mysqli_fetch_assoc($query);
*/
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
    <title>Agregar Imagen</title>
</head>
<body>
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
         <center><img src="../../img/logo_2_T_T.jpg" width="550px" height="175px" alt=""></center>
         <br>
         <br>
         <h2>Agregar Imagen</h2>
        </div>
        <form action="" name="imagenes_agregar" method="POST" enctype="multipart/form-data">
        <center>
                        <table class="table table-striped table-hover table-bordered table-sm shadow">
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            Código
                            </th>
                            <td class="text-center">
                            <input type="number" name="id_imagen" id="id_imagen" 
                            placerholder="El Codigo es asignado por el sistema" readOnly>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            Nombre producto
                            </th>
                            <td class="text-center">
                            <input type="hidden" name="id_producto_imagen" id="id_producto_imagen" value="<?php echo $key ?>" placerholder="El Codigo es asignado por el sistema">
                            <?php
                            $conet = new conexion();
                            $c = $conet->conectando();
                            $query2 = "select nombre_producto from productos where id_producto = '$key' ";
                            $ejecuta2 = mysqli_query($c, $query2);
                            $arreglo2 = mysqli_fetch_array($ejecuta2);
                            echo $arreglo2[0];
                            ?>
                        </td>
                    </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            Imagen
                            </th>
                            <td class="text-center">
                            <input type="file" name="imagen_producto" id="imagen_producto">
                            </td>
                            </tr>
                        </table>
                        <a href="<?php if( $key<>''){
                                                echo 'imagenes.php?key='.urlencode($key);
                                            } 
                                            ?>">
                           <P align="right"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                           <a href="imagenes.php"><button type="submit" class="btn btn-success" name="guarda"><i class="fa fa-check" aria-hidden="true">Guardar</i></button></a>
                           </P>                      
            </form>
    </div>
</body>
</html>