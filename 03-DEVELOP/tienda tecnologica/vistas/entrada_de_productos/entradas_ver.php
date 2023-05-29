<?php
include "../../conexion/conectar.php";
include "../../controlador/entradas_controlador.php";

$obj = new Entradas();
if ($_POST) {

    $obj->id_entrada_producto = $_POST['id_entrada_producto'];
    $obj->id_producto_entrada = $_POST['id_producto_entrada'];
    $obj->proveedor_producto_entrada = $_POST['proveedor_producto_entrada'];
    $obj->cantidad_entrada_producto = $_POST['cantidad_entrada_producto'];
    $obj->valor_proveedor_entrada_producto = $_POST['valor_proveedor_entrada_producto'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from entradas_productos where id_entrada_producto = '$key' ";
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
    <title>entradas ver</title>
</head>
<body>
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
        <br>
        <br>
          <h2>Datos Entrada</h2>
        </div>
        <form action="" name="entradas_ver" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_entrada" id="id_entrada"
                            value="<?php echo $arreglo2[0] ?>" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombre Producto
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_producto" id="id_producto"
                            value="<?php 
                                         $query = "select nombre_producto from productos where id_producto ='$arreglo2[1]'";
                                         $resultado = mysqli_query($c, $query);
                                         $arreglo = mysqli_fetch_array($resultado);
                                         echo $arreglo[0];
                                    ?>
                                   "readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                           Proveedor
                        </th>
                        <td class="text-center">
                            <input type="text" name="proveedor" id="proveedor"
                            value="<?php echo $arreglo2[2] ?>" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Entrada
                        </th>
                        <td class="text-center">
                            <input type="text" name="cantidad_entrada" id="cantidad_entrada" 
                            value="<?php echo $arreglo2[3] ?>" readonly maxlength="50" size="20">
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Valor Proveedor
                        </th>
                        <td class="text-center">
                            <input type="text" name="valor_proveedor" id="valor_proveedor" 
                            value="<?php echo $arreglo2[4] ?>"readonly maxlength="50" size="20">
                        </td>
                    </tr>
                </table>
                <a href="entradas.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>

                <button type="button" class="btn btn-primary" name="imprimir" onClick="window.print()"><i class="fa fa-check" aria-hidden="true">Imprimir</i></button>
                </P>
            </center>
        </form>               
    </div>
</body>
</html>


