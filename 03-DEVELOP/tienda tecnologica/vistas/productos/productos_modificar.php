<?php
include('../../conexion/conectar.php');
include('../../controlador/productoscontrolador.php'); 
$obj = new productos();
if($_POST){

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
//echo $key;
$conet = new conexion();
$c = $conet->conectando();
$query="select * from productos where id_producto = '$key'";
$resultado = mysqli_query($c, $query);
$arreglo2 = mysqli_fetch_array($resultado); 
$obj->id_producto = $arreglo2[0];
$obj->nombre_producto = $arreglo2[1];
$obj->id_categoria_producto = $arreglo2[2];
$obj->marca_producto = $arreglo2[3];
$obj->color_producto = $arreglo2[4];
$obj->pvp_con_iva_producto = $arreglo2[5];
$obj->salidas_producto = $arreglo2[6];
$obj->cantidad_stock_producto = $arreglo2[7];
$obj->descripcion_producto = $arreglo2[8];
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
<div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
         <center><img src="../../img/logo_2_T_T.jpg" width="550px" height="175px" alt=""></center>
         <br>
         <br>
         <h2>Modificar Producto</h2>
        </div>
        <form action="" name="productos_modificar" method="POST">
                        <table class="table table-striped table-hover table-bordered table-sm shadow">
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>Código</center>
                            </th>
                            <td class="text-center">
                            <center><input class="form-control form-control-sm" type="number" name="id_producto" id="id_producto" value="<?php echo $obj->id_producto  ?>" readOnly></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>Nombre producto</center>
                            </th>
                            <td class="text-center">
                            <center><input class="form-control form-control-sm" type="text" name="nombre_producto" id="nombre_producto" value="<?php echo $obj->nombre_producto  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>Nombre categoría</center>
                            </th>
                            <td class="text-center">
                            <center><select name="id_categoria_producto" id="id_categoria_producto" value="<?php 
                                        $query3="select nombre_categoria from categorias where id_categoria = '$arreglo2[2]'";
                                        $resultado3=mysqli_query($c,$query3);
                                        $arreglo3 = mysqli_fetch_array($resultado3);
                                        echo $arreglo3[0]; ?>">
                            <option>
                            Seleccione la categoria
                            <?php
                            do {
                            $categoria = $r['id_categoria'];
                            $nombre = $r['nombre_categoria'];
                            if ($categoria == $obj->id_categoria_producto) {
                            echo "<option value=$categoria=>$nombre";
                            } else {
                            echo "<option  value=$categoria>$nombre";
                            }
                            } while ($r = mysqli_fetch_assoc($query));
                            $row = mysqli_num_rows($query);
                            $rows = 0;
                            if ($rows > 0) {
                            mysqli_data_seek($r, 0);
                            $r = mysqli_fetch_assoc($query);
                            }
                            ?>
                            </option>
                            </select>
                            </center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>Marca</center>
                            </th>
                            <td class="text-center">
                            <center><input class="form-control form-control-sm" type="text" name="marca_producto" id="marca_producto" value="<?php echo $obj->marca_producto  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>Color</center>
                            </th>
                            <td class="text-center">
                            <center><input class="form-control form-control-sm" type="text" name="color_producto" id="color_producto" value="<?php echo $obj->color_producto  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>PVP con IVA</center>
                            </th>
                            <td class="text-center">
                            <center><input class="form-control form-control-sm" type="number" name="pvp_con_iva_producto" id="pvp_con_iva_producto" value="<?php echo $obj->pvp_con_iva_producto ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>Salidas</center>
                            </th>
                            <td class="text-center">
                            <center><input class="form-control form-control-sm" type="number" name="salidas_producto" id="salidas_producto" value="<?php echo $obj->salidas_producto  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>Cantidad(Stock)</center>
                            </th>
                            <td class="text-center">
                            <center><input class="form-control form-control-sm" type="number" name="cantidad_stock_producto" id="cantidad_stock_producto" value="<?php echo $obj->cantidad_stock_producto  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                            <center>Descripción</center>
                            </th>
                            <td class="text-center">
                            <center><input class="form-control form-control-sm" type="text" name="descripcion_producto" id="descripcion_producto" value="<?php echo $obj->descripcion_producto  ?>" placerholder="Digite el nombre del metodo de pago" aria-label=".form-control-sm example"></center>
                            </td>
                            </tr>
                        </table>
                           <P align="right"><P align="right"><a href="productos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                              <a href="productos.php"><button type="submit" class="btn btn-success" name="modifica"><i class="fa fa-check" aria-hidden="true">Guardar</i></button>
                              </a>
                           </P> 
            <center>                                
        </form>
    </div>
</body>
</html>