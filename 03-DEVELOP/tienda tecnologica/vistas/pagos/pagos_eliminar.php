<?php
include('../../conexion/conectar.php');
include("../../controlador/pagoscontrolador.php");
$obj = new pago();
if ($_POST) {

    $obj->id_pago = $_POST['id_pago'];
    $obj->metodo_pago = $_POST['metodo_pago'];
    $obj->estado_pago = $_POST['estado_pago'];
}
$key = $_GET['key'];
if ($key > 0) {

    $conet = new conexion();
    $c = $conet->conectando();
    $query = "select * from pagos where id_pago = '$key'";
    $resultado = mysqli_query($c, $query);
    $arreglo = mysqli_fetch_array($resultado);
    $obj->id_pago = $arreglo[0];
    $obj->metodo_pago = $arreglo[1];
    $obj->estado_pago = $arreglo[2];

} else {
    $obj->id_pago = "";
    $obj->metodo_pago = "";
    $obj->estado_pago = "";
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
    <title>Pagos</title>
</head>
<body>
<div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
         <center><img src="../../img/logo_2_T_T.jpg" width="550px" height="175px" alt=""></center>
         <br>
         <br>
         <h2>Eliminar método de pago</h2>
        </div>
        <form action="" name="pagos_eliminar" method="POST">
                        <table class="table table-striped table-hover table-bordered table-sm shadow">
                            <tr class="text-center align-middle">
                            <th class="text-center">
                               <center>Código</center>
                            </th>
                            <td class="text-center">
                               <center><input type="number" name="id_pago" id="id_pago" value="<?php echo $obj->id_pago ?>" readOnly></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                            <th class="text-center">
                               <center>Método de pago</center>
                            </th>
                            <td class="text-center">
                               <center><input type="text" name="metodo_pago" id="metodo_pago" value="<?php echo $obj->metodo_pago ?>" readOnly></center>
                            </td>
                            </tr>
                            <tr class="text-center align-middle">
                           <th class="text-center"><center>Estado</center></th>
                           <td class="text-center">
                           <center><input type="text" name="estado_pago" id="estado_pago" value="<?php echo $obj->estado_pago ?>" readOnly></center>
                           </td>
                           </tr>
                        </table>
                        <P align="right"><a href="pagos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                        <button type="submit" class="btn btn-success" name="elimina"><i class="fa fa-check" aria-hidden="true">Eliminar</i></button></P>
    </form>
    </div>
</body>
</html>