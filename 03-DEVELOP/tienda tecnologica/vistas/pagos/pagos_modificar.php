<?php
include('../../conexion/conectar.php');
include('../../controlador/pagoscontrolador.php'); 
$obj = new pago();
if($_POST){

    $obj->id_pago = $_POST['id_pago'];
    $obj->metodo_pago = $_POST['metodo_pago'];
    $obj->estado = $_POST['estado'];
}
$key = $_GET['key'];
echo $key;
$conet = new conexion();
$c = $conet->conectando();
$query="select * from pago where id_pago = '$key'";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$obj->id_pago = $arreglo[0];
$obj->metodo_pago = $arreglo[1];
$obj->estado = $arreglo[2];
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
    <div class="container shadow p-3 mb-5 bg-body rounded">
            <center><img src="../../img/logo_2_T_T.jpg" width="750px" height="225px" alt=""></center>
            <br>
            <br>
            <h2>Modificar método de pago</h2>
            <br>
            <br>
            <form action="" name="pagos_modificar" method="POST">
                            <table class="table table-striped table table-bordered border-success table table-hover">
                                <tr>
                                    <th>
                                        <center>Código</center>
                                    </th>
                                    <td>
                                        <center><input type="text" name="id_pago" id="id_pago" value="<?php echo $obj->id_pago  ?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></center>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <center>Método de pago</center>
                                    </th>
                                    <td>
                                        <center><input type="text" name="metodo_pago" id="metodo_pago"  value="<?php echo $obj->metodo_pago  ?>"placeholder="Digite el Nombre del metodo de pago"></center>
                                    </td>
                                </tr>
                                <tr>
                           <th><center>Estado</center></th>
                           <td><center><select name="estado" id="estado" value="<?php echo $obj->estado  ?>"placeholder="Seleccione el estado del metodo de pago"></center>
                           <option value="Activo">Activo</option>
                           <option value="Inactivo">Inactivo</option>
                           </td>
                           </tr>
                           </table>
                           <a href="pagos.php">
                           <P align="right"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
                           <a href="pagos.php"><button type="submit" class="btn btn-success" name="modifica"><i class="fa fa-check" aria-hidden="true">Guardar</i></button>
                           </a>
                           </P>                      
            </form>
    </div>
</body>
</html>