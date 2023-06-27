<?php
include('../../conexion/conectar.php');
include("../../controlador/imagenescontrolador.php");
$obj = new imagenes();
if ($_POST) {

    $obj->id_imagen = $_POST['id_imagen'];
    $obj->id_producto_imagen = $_POST['id_producto_imagen'];
    $obj->imagen_producto = $_FILES['imagen_producto']['tmp_name'];
}
$key = $_GET['key'];
if ($key > 0) {

    $conet = new conexion();
    $c = $conet->conectando();
    $query2 = "select * from imagenes where id_imagen = '$key'";
    $resultado2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
    $obj->id_imagen = $arreglo2[0];
    $obj->id_producto_imagen = $arreglo2[1];
    $obj->imagen_producto = $arreglo2[2];

} else {
    $obj->id_imagen = "";
    $obj->id_producto_imagen = "";
    $obj->imagen_producto = "";
}
?>

<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from productos";
$query = mysqli_query($c, $sql);
$r = mysqli_fetch_assoc($query);
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
    <title>Imagenes</title>
</head>
<body>
<div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
         <center><img src="../../img/logo_2_T_T.jpg" width="550px" height="175px" alt=""></center>
         <br>
         <br>
         <h2>Eliminar Imagen</h2>
        </div>
        <form action="" name="imagenes_eliminar" method="POST">
                            <table class="table table-striped table-hover table-bordered table-sm shadow">
                                <tr class="text-center align-middle">
                                    <th class="text-center">
                                        <center>Código</center>
                                    </th>
                                    <td class="text-center">
                                        <center><input type="text" name="id_imagen" id="id_imagen" value="<?php echo $obj->id_imagen  ?>" readOnly></center>
                                    </td>
                                </tr>
                                <tr class="text-center align-middle">
                                    <th class="text-center">
                                        <center>Nombre producto</center>
                                    </th>
                                    <td class="text-center">
                                        <center><input type="text" name="id_producto" id="id_producto" value="<?php 
                                        $query3="select nombre_producto from productos where id_producto = '$arreglo2[1]'";
                                        $resultado3=mysqli_query($c,$query3);
                                        $arreglo3 = mysqli_fetch_array($resultado3);
                                        echo $arreglo3[0]; ?>" readOnly></center>
                                    </td>
                                </tr>
                                <tr class="text-center align-middle">
                                    <th class="text-center">
                                        <center>Imagen</center>
                                    </th>
                                    <td class="text-center">
                                    <center><input type="image" name="imagen_producto" id="imagen_producto" value= <img src="<?php echo $obj->imagen_producto; ?>" width="250" height="250" readOnly></center>
                                    </td>
                                </tr>
                           </table>
                           <a href="<?php if( $arreglo2[1]<>''){
                                                echo 'imagenes.php?key='.urlencode($arreglo2[1]);
                                            } 
                                            ?>">    
                        <P align="right"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                        <a href="<?php if( $arreglo2[1]<>''){
                                                echo 'imagenes.php?key='.urlencode($arreglo2[1]);
                                            } 
                                            ?>"><button type="submit" class="btn btn-success" name="elimina"><i class="fa fa-check" aria-hidden="true">Eliminar</i></button></a>
                                            <a href="<?php if( $arreglo2[1]<>''){echo 'imagenes.php?key='.urlencode($arreglo2[1]);
                                            }?>"></P>
    </form>
    </div>
</body>
</html>