<?php
include('../../conexion/conectar.php');
include('../../controlador/productoscontrolador.php'); 
$obj = new productos();
if($_POST){

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
echo $key;
$conet = new conexion();
$c = $conet->conectando();
$query="select * from productos where id_producto = '$key'";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$obj->id_producto = $arreglo[0];
$obj->nombre_producto = $arreglo[1];
$obj->id_categoria = $arreglo[2];
$obj->marca = $arreglo[3];
$obj->color = $arreglo[4];
$obj->pvp_con_iva = $arreglo[5];
$obj->salidas = $arreglo[6];
$obj->cantidad_stock = $arreglo[7];
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
            <h2>Modificar producto</h2>
            <br>
            <br>
            <form action="" name="productos_modificar" method="POST">
                            <table class="table table-striped table table-bordered border-success table table-hover">
                            <tr>
                            <th>
                            <center>Código</center>
                            </th>
                            <td>
                            <center><input class="form-control form-control-sm" type="number" name="id_producto" id="id_producto" value="<?php echo $obj->id_producto  ?>" placerholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example" readOnly></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Nombre producto</center>
                            </th>
                            <td>
                            <center><input class="form-control form-control-sm" type="text" name="nombre_producto" id="nombre_producto" value="<?php echo $obj->nombre_producto  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Nombre categoría</center>
                            </th>
                            <td>
                            <center><input class="form-control form-control-sm" type="text" name="id_categoria" id="id_categoria" value="<?php echo $obj->id_categoria  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Marca</center>
                            </th>
                            <td>
                            <center><input class="form-control form-control-sm" type="text" name="marca" id="marca" value="<?php echo $obj->marca  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Color</center>
                            </th>
                            <td>
                            <center><input class="form-control form-control-sm" type="text" name="color" id="color" value="<?php echo $obj->color  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>PVP con IVA</center>
                            </th>
                            <td>
                            <center><input class="form-control form-control-sm" type="text" name="pvp_con_iva" id="pvp_con_iva" value="<?php echo $obj->pvp_con_iva  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Salidas</center>
                            </th>
                            <td>
                            <center><input class="form-control form-control-sm" type="text" name="salidas" id="salidas" value="<?php echo $obj->salidas  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr>
                            <th>
                            <center>Cantidad(Stock)</center>
                            </th>
                            <td>
                            <center><input class="form-control form-control-sm" type="text" name="cantidad_stock" id="cantidad_stock" value="<?php echo $obj->cantidad_stock  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                        </table>
                           <P align="right"><P align="right"><a href="productos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                           <a href="productos.php"><button type="submit" class="btn btn-success" name="modifica"><i class="fa fa-check" aria-hidden="true">Guardar</i></button>
                           </a>
                           </P>                      
            </form>
    </div>
</body>
</html>