<?php
include("../../conexion/conectar.php");
include("../../controlador/productoscontrolador.php");

$obj = new productos();
if ($_POST) {

    $obj->id_producto = $_POST['id_producto'];
    $obj->nombre_producto = $_POST['nombre_producto'];
    $obj->id_categoria = $_POST['id_categoria'];
    $obj->marca = $_POST['marca'];
    $obj->color = $_POST['color'];
    $obj->pvp_con_iva = $_POST['pvp_con_iva'];
    $obj->salidas = $_POST['salidas'];
    $obj->cantidad_stock = $_POST['cantidad_stock'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from productos where id_producto = '$key' ";
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
                            <center><input type="text" name="id_categoria" id="id_categoria"  value="<?php echo $arreglo2[2]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Marca</center>
                        </th>
                        <td>
                            <center><input type="text" name="marca" id="marca"  value="<?php echo $arreglo2[3]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Color</center>
                        </th>
                        <td>
                            <center><input type="text" name="color" id="color"  value="<?php echo $arreglo2[4]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>PVP_con_IVA</center>
                        </th>
                        <td>
                            <center><input type="number" name="pvp_con_iva" id="pvp_con_iva"  value="<?php echo $arreglo2[5]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Salidas</center>
                        </th>
                        <td>
                            <center><input type="number" name="salidas" id="salidas"  value="<?php echo $arreglo2[6]?>" readonly></center>
                        </td>            
                    </tr>
                    <tr>
                        <th>
                            <center>Cantidad(Stock)</center>
                        </th>
                        <td>
                            <center><input type="number" name="cantidad_stock" id="cantidad_stock"  value="<?php echo $arreglo2[7]?>" readonly></center>
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