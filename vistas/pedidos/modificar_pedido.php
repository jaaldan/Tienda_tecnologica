<?php
include('../../conexion/conectar.php');
include('../../controlador/pedidoscontrolador.php'); 
$obj = new pedidos();
if($_POST){

    $obj->id_pedido = $_POST['id_pedido'];
    $obj->id_cliente_pedido = $_POST['id_cliente_pedido'];
    $obj->direccion_pedido = $_POST['direccion_pedido'];
    $obj->fecha_pedido = $_POST['fecha_pedido'];
    $obj->estado_pedido = $_POST['estado_pedido'];
}
$key = $_GET['key'];
echo $key;
$conet = new conexion();
$c = $conet->conectando();
$query="select * from pedidos where id_pedido = '$key'";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$obj->id_pedido = $arreglo[0];
$obj->id_cliente_pedido = $arreglo[1];
$obj->direccion_pedido = $arreglo[2];
$obj->fecha_pedido = $arreglo[3];
$obj->estado_pedido = $arreglo[4];
?>

<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from clientes";
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
    <title>Modificar Pedido</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
            <center><img src="../../img/logo_2_T_T.jpg" width="400" height="150" alt=""></center>
            <br>
            <br>
            <h2>Modificar Pedido</h2>
            <br>
            <br>
        <form action="" name="modificar_pedido" method="POST">
        <table class="table-light table table-striped table table-bordered border-success table table-hover">
            <tr>
            <th>
            <center>Id Pedido</center>
            </th>
            <td>
            <center><input class="form-control form-control-sm" type="number" name="id_pedido" id="id_pedido" value="<?php echo $obj->id_pedido  ?>" aria-label=".form-control-sm example" readOnly></center>
            </td>
            </tr>
            <tr>
            <th>
            <center>Id Cliente</center>
            </th>
            <td>
                            <center><select name="id_cliente_pedido" id="id_cliente_pedido" readOnly>
                            <option>
                            Seleccione el cliente
                            <?php
                            do {
                            $cliente = $r['id_cliente'];
                            $nombre = $r['nombres_cliente'];
                            if ($cliente == $obj->id_cliente_pedido) {
                            echo "<option value=$cliente=>$nombre";
                            } else {
                            echo "<option  value=$cliente>$nombre";
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
            <tr>
            <th>
             <center>Direccion</center>
             </th>
             <td>
             <center><input class="form-control form-control-sm" type="text" name="direccion_pedido" id="direccion_pedido" value="<?php echo $obj->direccion_pedido  ?>" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
             <th>
             <center>Fecha</center>            
             </th>
             <td>
             <center><input class="form-control form-control-sm" type="date" name="fecha_pedido" id="fecha_pedido" value="<?php echo $obj->fecha_pedido  ?>"  aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
             <th><center>Estado</center></th>
             <td><center><select name="estado_pedido" id="estado_pedido" value="<?php echo $obj->estado_pedido  ?>">
             <option value="Activo">ACTIVO</option>
             <option value="Inactivo">INACTIVO</option>
             </tr>
             </table>
        <P align="right"><a href="pedidos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
        <button type="submit" class="btn btn-success" name="modifica"><i class="fa fa-check" aria-hidden="true">Guardar</i></button></P>
        </form>
    </div>
</body>
</html>