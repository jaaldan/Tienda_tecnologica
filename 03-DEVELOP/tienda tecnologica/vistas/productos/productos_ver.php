<?php
include("../../conexion/conectar.php");
include("../../controlador/productoscontrolador.php");
$obj = new productos();
if ($_POST) {

    $obj->id_producto = $_POST['id_producto'];
    $obj->nombre_producto = $_POST['nombre_producto'];
    $obj->id_categoria_producto = $_POST['id_categoria_producto'];
    $obj->marca_producto = $_POST['marca_producto'];
    $obj->color_producto = $_POST['color_producto'];
    $obj->pvp_con_iva_producto = $_POST['pvp_con_iva_producto'];
    $obj->salidas_producto = $_POST['salidas_producto'];
    $obj->cantidad_stock_producto = $_POST['cantidad_stock_producto'];
    $obj->descripcion_producto = $_POST['descripcion_producto'];
}
$key = $_GET['key'];
echo $key;
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from productos where id_producto = '$key' ";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);
?>

<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from categorias";
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
    <title>Productos</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center><img src="../../img/logo_2_T_T.jpg" width="750px" height="225px" alt=""></center>
        <br>
        <br>
        <h2>Ver producto</h2>
        <br>
        <br>
        <form action="" name="productos_ver" method="POST">
            <center>
                <table class="table table-striped table table-bordered border-success table table-hover">
                    <tr>
                        <th>
                            <center>Código</center>
                        </th>
                        <td>
                            <center><input type="number" name="id_producto" id="id_producto" value="<?php echo $arreglo2[0]?>" readonly></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombre producto</center>
                        </th>
                        <td>
                            <center><input type="text" name="nombre_producto" id="nombre_producto"  value="<?php echo $arreglo2[1]?>" readonly></center>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <center>Nombre categoría</center>
                        </th>
                        <td>
                            <center><input type="text" name="id_categoria_producto" id="id_categoria_producto"  value="<?php 
                                        $query3="select nombre_categoria from categorias where id_categoria = '$arreglo2[2]'";
                                        $resultado3=mysqli_query($c,$query3);
                                        $arreglo3 = mysqli_fetch_array($resultado3);
                                        echo $arreglo3[0];?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Marca</center>
                        </th>
                        <td>
                            <center><input type="text" name="marca_producto" id="marca_producto"  value="<?php echo $arreglo2[3]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Color</center>
                        </th>
                        <td>
                            <center><input type="text" name="color_producto" id="color_producto"  value="<?php echo $arreglo2[4]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>PVP_con_IVA</center>
                        </th>
                        <td>
                            <center><input name="pvp_con_iva_producto" id="pvp_con_iva_producto"  value="$<?php echo number_format($arreglo2[5], 2, '.', ',');?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Salidas</center>
                        </th>
                        <td>
                            <center><input type="number" name="salidas_producto" id="salidas_producto"  value="<?php echo $arreglo2[6]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Cantidad(Stock)</center>
                        </th>
                        <td>
                            <center><input type="number" name="cantidad_stock_producto" id="cantidad_stock_producto"  value="<?php echo $arreglo2[7]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Descripción</center>
                        </th>
                        <td>
                            <center><input class="form-control" type="text" name="descripcion_producto" id="descripcion_producto" aria-label="default input example" value="<?php echo $arreglo2[8]?>" readonly></center>
                        </td>            
                    </tr>
                </table>
                <a href="productos.php" target="marco"> 
                    <P align="right"> <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button>
                </a>
                </P>
            </center>
        </form>
    </div>
</body>
</html>