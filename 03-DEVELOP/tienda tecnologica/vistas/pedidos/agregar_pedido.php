<?php
include('../../conexion/conectar.php');
include("../../controlador/pedidoscontrolador.php");
$obj = new pedidos();
if ($_POST) {

    $obj->id_pedido = $_POST['id_pedido'];
    $obj->id_cliente = $_POST['id_cliente'];
    $obj->direccion = $_POST['direccion'];
    $obj->fecha = $_POST['fecha'];
    $obj->estado = $_POST['estado'];
}
?>

<?php
$conet = new Conexion();
$c = $conet->conectando();
$sql = "select * from cliente";
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
    <title>Agregar Pedido</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
            <center><img src="../../img/logo_2_T_T.jpg" width="400" height="150" alt=""></center>
            <br>
            <br>
            <h2>Agregar Pedido</h2>
            <br>
            <br>
        <form action="" name="agregar_pedido" method="POST">
        <table class="table-light table table-striped table table-bordered border-success table table-hover">
            <tr>
            <th>
            <center>Id Pedido</center>
            </th>
            <td>
            <center><input class="form-control form-control-sm" type="number" name="id_pedido" id="id_pedido" placerholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example" readOnly></center>
            </td>
            </tr>
            <tr>
            <th>
            <center>Id Cliente</center>
            </th>
            <td>
                            <center><select name="id_cliente" id="id_cliente">
                            <option>
                            Seleccione el cliente
                            <?php
                            do {
                            $cliente = $r['id_cliente'];
                            $nombre = $r['nombres'];
                            if ($cliente == $obj->id_cliente) {
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
             <center><input class="form-control form-control-sm" type="text" name="direccion" id="direccion" placerholder="Digite la direccion del domicilio" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
             <th>
             <center>Fecha</center>            
             </th>
             <td>
             <center><input class="form-control form-control-sm" type="date" name="fecha" id="fecha" placerholder="Digite la fecha del pedido" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
             <th><center>Estado</center></th>
             <td><center><select name="estado" id="estado">
             <option value="Activo">Activo</option>
             <option value="Inactivo">Inactivo</option>
             </tr>
             </table>
        <P align="right"><a href="pedidos.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true">Atras</i></button></a>
        <button type="submit" class="btn btn-success" name="guarda"><i class="fa fa-check" aria-hidden="true">Guardar</i></button></P>
        </form>
    </div>
</body>
</html>